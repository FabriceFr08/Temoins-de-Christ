<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public function categorie_article()
    {
        return $this->belongsTo(CategorieArticle::class);
    }

    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }
}
