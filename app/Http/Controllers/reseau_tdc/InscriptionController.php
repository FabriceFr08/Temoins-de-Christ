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
use Hashids\Hashids;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class InscriptionController extends Controller
{

    public function index(){
        $secteurs = Secteur::select(['id', 'nom'])->get();
        $pays = Pays::select(['id', 'nom'])->get();
        $villes = Ville::select(['id', 'nom'])->get();
        $services = Service::with(['prestataire', 'secteur'])->get() /*->paginate(9)*/; // Paginate with 10 items per page
        foreach ($services as $service) {
            $service->hashedId = \Torann\Hashids\Facade\Hashids::encode($service->id);
        }

        return view('reseau_tdc.services', compact('secteurs', 'pays', 'villes', 'services'));
    }


    public function create()  // Fonction pour la vue/formulaire d'inscription pour le réseau des tdc
    {
        $pays = Pays::select(['id', 'nom'])->orderBy('nom', 'asc')->get();
        $villes = Ville::with('pays')->select('id', 'nom', 'pays_id')->get();
        $secteurs = Secteur::select('id', 'nom')->get();
        return view('reseau_tdc/inscription', compact('pays', 'villes', 'secteurs'));
    }

    public function store(Request $request)  // Valider la créationd'une nouvelle personne
    {

        $messages = [
            'email' => 'Le champ :attribute doit être une adresse email valide.',
            'unique' => 'L\' :attribute est déjà utilisée.',

        ];
        //dd($validated);

        //dd($request);
        $validated = $request->validate([
           'email' => 'required|unique:prestataires|email',
            //'telephone' => 'required|unique:prestataires',
        ], $messages);
        //dd($validated);
        if($validated){
            $prestataire = $request->only(['nom', 'prenom', 'email', 'telephone', 'ville_id', 'promotion', 'photo']);
            $service = $request->only(['nomService', 'siteWeb', 'tiktok', 'facebook', 'instagram', 'commentaire', 'secteur_id']);


            if ($request->hasFile('photo')){
                $fileName = $request->file('photo')->getClientOriginalName();

                $path = $request->file('photo')->storeAs('public/images/prestataires/'.$prestataire['nom'], $fileName);
                $prestataire['photo'] = str_replace('public/', '', $path);   // Association de la photo au prestataire
            }

            $prestataire = Prestataire::create($prestataire);  // Enregistrement du prestataire
            $service['prestataire_id'] = $prestataire->id;  // Association du prestataire à son service
            Service::create($service);   // Création du service
            return redirect()->route('reseau.services')->with('success', 'Service enregistré avec suucès');
        } else{
            dd($request->errors);
            //return redirect()->route('reseau.services')->with('success', 'Service enregistré avec suucès');
        }




    }

    public function checkEmail(Request $request)
    {
        $email = $request->input('email');
        $exists = Prestataire::where('email', $email)->exists();
        return response()->json($exists);
    }


    public function show($hashedId)
    {
        $decodedId = \Torann\Hashids\Facade\Hashids::decode($hashedId);
        $service = Service::where('id', $decodedId[0])->with(['prestataire', 'secteur'])->firstOrFail();

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
