<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Commentaire;
use App\Models\Article;

class CommentaireController extends Controller
{
    public function store(Request $request, Article $article)
    {
        $request->validate([
            'commentaire' => 'required|string',
            'nom' => 'required|string',
        ]);

        $commentaire = new Commentaire();
        $commentaire->commentaire = $request->input('commentaire');
        $commentaire->nom = $request->input('nom');
        $commentaire->article_id = $article->id;
        $commentaire->save();

        return redirect()->back()->with('success', 'Commentaire ajouté avec succès.');
    }
}
