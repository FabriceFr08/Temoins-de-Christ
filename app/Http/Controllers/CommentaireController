<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Commentaire;
use Illuminate\Http\Request;

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
