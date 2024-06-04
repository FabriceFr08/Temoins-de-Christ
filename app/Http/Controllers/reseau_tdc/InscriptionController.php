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

    public function store(PrestataireStoreRequest $prestataireStoreRequest, ServiceStoreRequest $serviceStoreRequest)  // Valider la créationd'une nouvelle personne
    {
        //dd($prestataireStoreRequest);
        $service = $serviceStoreRequest->validated();
        $prestataire = Prestataire::create($prestataireStoreRequest->validated());  // Enregistrement du prestataire
        $service['prestataire_id'] = $prestataire->id;
        Service::create($service);

        return redirect()->route('reseau.services')->with('success', 'Enregistrement réussi');

    }

    public function checkEmail(Request $request)
    {
        $email = $request->input('email');
        $exists = Prestataire::where('email', $email)->exists();

        return response()->json(['exists' => $exists]);
    }
}
