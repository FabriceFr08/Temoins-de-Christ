<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nomService' => 'required',
            'siteWeb',
            'tiktok',
            'facebook',
            'instagram',
            'commentaire' => 'required',
            'secteur_id' => 'required',
        ];
    }

//    public function validated($key = null, $default = null)
//    {
//        $validated = parent::validated();
//
//        // Préparer les données pour la colonne JSON reseaux_sociaux
////        $reseauxSociaux = [
////            'tiktok' => $validated['tiktok'] ?? null,
////            'facebook' => $validated['facebook'] ?? null,
////            'instagram' => $validated['instagram'] ?? null,
////        ];
//
//        // Retourner les données avec le champ JSON
//        return [
//            'nomService' => $validated['nomService'],
//            'siteWeb' => $validated['siteWeb'] ?? null,
//            'commentaire' => $validated['commentaire'],
//            'secteur_id' => $validated['secteur_id'],
//            'tiktok' => $reseauxSociaux,
//        ];
//    }

}
