<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentateur extends Model
{
    use HasFactory;

    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }
}
