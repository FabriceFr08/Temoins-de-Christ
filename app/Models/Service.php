<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomService',
        'siteWeb',
        'commentaire',
        'secteur_id',
        'prestataire_id',
        'reseauxSociaux'
    ];

    protected $casts = [
        'reseauxSociaux' => 'array'
    ];

    public function prestataire()
    {
        return $this->belongsTo(Prestataire::class);
    }

    public function secteur(){
        return $this->belongsTo(Secteur::class);
    }
}
