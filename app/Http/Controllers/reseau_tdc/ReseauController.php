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
        $code = mt_rand(100000, 999999);
        VerificationCode::create([
            'email' => $request->email,
            'code' => $code,
            'expires_at' => Carbon::now()->addMinutes(30),
        ]);

        Mail::to($request->email)->send(new VerificationCodeMail($code));
        return redirect()->route('showVerificationForm', ['prestataire' => $prestataire->id])
            ->with('success', 'Un code de vérification a été envoyé à votre email.');
    }

    public function showVerificationForm($prestataire)
    {
        return view('reseau_tdc.verification_code', compact('prestataire'));
    }

    public function verificationCode()
    {
        return view('reseau_tdc.demande_modification'); // Assurez-vous d'avoir une vue auth.verify
    }

    public function verifyCode(Request $request, $prestataire)
    {
        $email = Prestataire::where('id', $prestataire)->value('email');
        //dd($email);
        $request->validate(['code' => 'required|string']);
        $verificationCode = VerificationCode::where('email', $email)
            ->where('code', $request->code)
            ->where('expires_at', '>', Carbon::now())
            ->first();

        if ($verificationCode) {
            // Le code est valide
            //dd("Bien");
            $verificationCode->delete();
            return redirect()->route('updatePrestataire', ['prestataire' => $prestataire]);
        } else {
            return back()->withErrors(['code' => 'Le code de vérification est invalide.']);
        }
    }

    public function updatePrestataire($prestataire){

        //$prestataire = Prestataire::findOrFail($prestataire);
        $prestataire = Prestataire::where('id', $prestataire)->with(['secteur', 'ville'])->firstOrFail();
        $pays = Pays::select(['id', 'nom'])->orderBy('nom', 'asc')->get();
        $villes = Ville::with('pays')->select('id', 'nom', 'pays_id')->get();
        $secteurs = Secteur::select('id', 'nom')->get();
//        $service = Service::where('id', $prestataire)->with(['prestataire', 'secteur'])->firstOrFail();

        return view('reseau_tdc.update', compact('prestataire', 'pays', 'villes', 'secteurs'));
    }

}
