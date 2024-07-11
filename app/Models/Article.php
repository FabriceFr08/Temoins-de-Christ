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

   // Relation avec les commentaires
   public function commentaires()
   {
       return $this->hasMany(Commentaire::class);
   }

   // Relation avec la catégorie d'article
   public function categorie()
   {
       return $this->belongsTo(CategorieArticle::class, 'categorie_article_id');
   }
}
