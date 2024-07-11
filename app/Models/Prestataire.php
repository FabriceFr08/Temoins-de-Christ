<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestataire extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'telephone',
        'ville_id',
        'promotion',
        'photo'
    ];

    public function secteur(){
        return $this->hasMany(Service::class);
    }

    public function ville(){
        return $this->belongsTo(Ville::class);
    }
}
