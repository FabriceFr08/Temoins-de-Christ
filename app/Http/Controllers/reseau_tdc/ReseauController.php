<?php

namespace App\Http\Controllers\reseau_tdc;

use App\Http\Controllers\Controller;
use App\Mail\VerificationCodeMail;
use App\Models\Prestataire;
use App\Models\VerificationCode;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReseauController extends Controller
{

    public function sendVerificationCode(Request $request){

        $request->validate(['email' => 'required|email|exists:prestataires,email']);

        $user = Prestataire::where('email', $request->email)->first();
        $code = mt_rand(100000, 999999);
        VerificationCode::create([
            'email' => $request->email,
            'code' => $code,
            'expires_at' => Carbon::now()->addMinutes(30),
        ]);

        Mail::to($request->email)->send(new VerificationCodeMail($code));
        return redirect()->route('showVerificationForm')->with('success', 'Un code de vérification a été envoyé à votre email.');

    }

    public function verifyCode(Request $request)
    {
        $request->validate(['email' => 'required|email|exists:verification_codes,email', 'code' => 'required|string']);

        $verificationCode = VerificationCode::where('email', $request->email)
            ->where('code', $request->code)
            ->where('expires_at', '>', Carbon::now())
            ->first();

        if ($verificationCode) {
            // Le code est valide
            return redirect()->route('updateForm')->with('email', $request->email);
        } else {
            return back()->withErrors(['code' => 'Le code de vérification est invalide.']);
        }
    }

}
