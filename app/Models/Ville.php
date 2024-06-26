<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nom',
        'pays_id'
    ];

    public function pays()
    {
        return $this->belongsTo(Pays::class, 'pays_id');
    }

    public function prestataire()
    {
        return $this->hasMany(Prestataire::class, 'prestataire_id');
    }

}
