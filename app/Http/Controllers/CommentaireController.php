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
        ]);

        $commentaire = new Commentaire();
        $commentaire->commentaire = $request->input('commentaire');
        $commentaire->article_id = $article->id;
        // Vous pouvez remplacer '1' par l'ID de l'utilisateur authentifié si vous avez un système d'authentification en place
        $commentaire->commentateur_id = 1;
        $commentaire->save();

        return redirect()->back()->with('success', 'Commentaire ajouté avec succès.');
    }
}
