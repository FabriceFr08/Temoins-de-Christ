<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'contenu',
        'datePublication',
        'categorie_article_id',
        'image',

    ];

    public function categorie()
    {
        return $this->belongsTo(CategorieArticle::class, 'categorie_article_id');
    }

    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }
}
