<?php

namespace App\Http\Controllers\reseau_tdc;

use App\Http\Controllers\Controller;
use App\Http\Requests\PrestataireStoreRequest;
use App\Http\Requests\ServiceStoreRequest;
use App\Models\Pays;
use App\Models\Prestataire;
use App\Models\Secteur;
use App\Models\Service;
use App\Models\Ville;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class InscriptionController extends Controller
{

    public function index(){
        $secteurs = Secteur::select(['id', 'nom'])->get();
        $pays = Pays::select(['id', 'nom'])->get();
        $villes = Ville::select(['id', 'nom'])->get();
        $services = Service::with(['prestataire', 'secteur'])->get();

        return view('reseau_tdc.services', compact('secteurs', 'pays', 'villes', 'services'));
    }

    public function create()  // Fonction pour la vue/formulaire d'inscription pour le réseau des tdc
    {
        $pays = Pays::select(['id', 'nom'])->get();
        $villes = Ville::with('pays')->select('id', 'nom', 'pays_id')->get();
        $secteurs = Secteur::select('id', 'nom')->get();
        return view('reseau_tdc/inscription', compact('pays', 'villes', 'secteurs'));
    }

    public function store(Request $request, PrestataireStoreRequest $prestataireStoreRequest, ServiceStoreRequest $serviceStoreRequest)  // Valider la créationd'une nouvelle personne
    {
        dd($request);
        $service = $serviceStoreRequest->validated();
        if ($prestataireStoreRequest->hasFile('photo')){
            $path = $prestataireStoreRequest->file('photo')->store('prestataires/'.$prestataireStoreRequest, 'public');
        }
        $prestataireStoreRequest['photo'] = $path;   // Association de la photo au prestataire
        $prestataire = Prestataire::create($prestataireStoreRequest->validated());  // Enregistrement du prestataire
        $service['prestataire_id'] = $prestataire->id;  // Association du prestataire à son service
        Service::create($service);   // Création du service

        return redirect()->route('reseau_tdc.services')->with('success', 'Service enregistré avec suucès');

    }

    public function checkEmail(Request $request)
    {
        $email = $request->input('email');
        $exists = Prestataire::where('email', $email)->exists();

        return response()->json(['exists' => $exists]);
    }


    public function show(Service $service)
    {
        return view('reseau_tdc.show', compact('service'));
    }


    public function filter(Request $request)
    {
        $secteurs = Secteur::all();
        $pays = Pays::all();
        $villes = Ville::all();

        $query = Service::query();

        if ($request->has('secteur_id') && $request->secteur_id) {
            $query->where('secteur_id', $request->secteur_id);
        }

//        if ($request->has('pays_id') && $request->pays_id) {
//            $query->whereHas('prestataire', function ($q) use ($request) {
//                $q->where('pays_id', $request->pays_id);
//            });
//        }

        if ($request->has('ville_id') && $request->ville_id) {
            $query->whereHas('prestataire', function ($q) use ($request) {
                $q->where('ville_id', $request->ville_id);
            });
        }

        $services = $query->get();

        return view('reseau_tdc.services', compact('services', 'secteurs', 'pays', 'villes'));
    }


}
