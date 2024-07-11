<?php

namespace App\Http\Controllers\reseau_tdc;

use App\Http\Controllers\Controller;
use App\Mail\VerificationCodeMail;
use App\Models\Pays;
use App\Models\Prestataire;
use App\Models\Secteur;
use App\Models\Service;
use App\Models\VerificationCode;
use App\Models\Ville;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Torann\Hashids\Facade\Hashids;

class ReseauController extends Controller
{

    public function sendVerificationCode(Request $request){

        $request->validate([
            'email' => 'required|email|exists:prestataires,email',
        ], [
            'required' => 'L\' :attribute est obligatoire.',
            'email' => 'Le champ :attribute doit être une adresse email valide.',
            'exists' => 'L\':attribute n\'existe pas.',
        ]);

        $prestataire = Prestataire::where('email', $request->email)->first();
        $prestataire = Hashids::encode($prestataire->id); // Hashage de l'id
        $code = mt_rand(100000, 999999);
        VerificationCode::create([
            'email' => $request->email,
            'code' => $code,
            'expires_at' => Carbon::now()->addMinutes(30),
        ]);

        Mail::to($request->email)->send(new VerificationCodeMail($code));
        return redirect()->route('showVerificationForm', ['prestataire' => $prestataire])
            ->with('success', 'Un code de vérification a été envoyé à votre email.');
    }

    public function showVerificationForm($prestataire)
    {
        $prestataire = \Torann\Hashids\Facade\Hashids::decode($prestataire);
        return view('reseau_tdc.verification_code', compact('prestataire'));
    }

    public function verificationCode()
    {
        return view('reseau_tdc.demande_modification'); // Assurez-vous d'avoir une vue auth.verify
    }

    public function verifyCode(Request $request, $prestataire)
    {

        $email = Prestataire::where('id', $prestataire)->value('email');
        $request->validate(['code' => 'required|string']);
        $prestataire = Hashids::encode($prestataire); // Hashage de l'id
        $verificationCode = VerificationCode::where('email', $email)
            ->where('code', $request->code)
            ->where('expires_at', '>', Carbon::now())
            ->first();

        if ($verificationCode) {
            $time = date('His');
            $verificationCode->delete();
            return redirect()->route('updatePrestataire', ['prestataire' => $prestataire, 'code' => Hashids::encode($verificationCode->code. + $time)]);
        } else {
            return back()->withErrors(['code' => 'Le code de vérification est invalide.']);
        }
    }

    public function edit($prestataire){  // Affiche le formulaire de mise à jour des informations d'un prestataire

        $prestataire_id = $prestataire;
        $prestataire = \Torann\Hashids\Facade\Hashids::decode($prestataire); // Décodage de l'id

        $prestataire = Prestataire::where('id', $prestataire[0])->with(['secteur', 'ville'])->firstOrFail();
        $pays = Pays::select(['id', 'nom'])->orderBy('nom', 'asc')->get();
        $villes = Ville::with('pays')->select('id', 'nom', 'pays_id')->get();
        $secteurs = Secteur::select('id', 'nom')->get();


//        $service = Service::where('id', $prestataire)->with(['prestataire', 'secteur'])->firstOrFail();


        return view('reseau_tdc.update', compact('prestataire', 'pays', 'villes', 'secteurs', 'prestataire_id'));
    }

    public function update(Request $request, $prestataire)
    {
        //dd($request, $prestataire);
        $prestataire_id = Hashids::decode($prestataire);

        $user = Prestataire::where('id', $prestataire_id); // Récupération du prestataire
        $user_service = Service::where('prestataire_id', $prestataire_id);
        //$validated = $request->validate([]);
        $messages = [
            'email' => 'Le champ :attribute doit être une adresse email valide.',
            'unique' => 'L\' :attribute est déjà utilisée.',
        ];

//        $validated = $request->validate([
//            'email' => 'required|unique:prestataires|email',
//        ], $messages);

        if($user){
            //dd($request);
            $prestataire = $request->only(['nom', 'prenom', 'email', 'telephone', 'ville_id', 'promotion', 'photo']);
            $service = $request->only(['nomService', 'siteWeb', 'tiktok', 'facebook', 'instagram', 'commentaire', 'secteur_id']);

            if ($request->hasFile('photo')){
                $fileName = $request->file('photo')->getClientOriginalName();

                $timestamp = date('Ymd_His');

                $path = $request->file('photo')->storeAs('public/images/prestataires/'.$prestataire['nom'], $fileName);
                //dd($path);
                $prestataire['photo'] = str_replace('public/', '', $path);   // Association de la photo au prestataire

            }
            $user->update($prestataire);
            $user_service->update($service);

            return redirect()->route('reseau.services')->with('success', 'Mise à jour effectuée avec succès');
        } else{
            dd($request->errors);
            //return redirect()->route('reseau.services')->with('success', 'Service enregistré avec suucès');
        }
    }


}
