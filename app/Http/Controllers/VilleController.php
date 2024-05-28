<?php

namespace App\Http\Controllers;

use App\Models\Pays;
use App\Models\Ville;
use Illuminate\Http\Request;

class VilleController extends Controller
{
    public function index()
    {
        $villes = Ville::with('pays')->select('id', 'nom', 'pays_id')->get();
        return view('back.villes.index', compact('villes'));
    }


    // Afficher le formulaire de création d'un nouvel article
    public function create()
    {
        $pays = Pays::all();
        return view('back.villes.create')->with('pays', $pays);
    }

    // Enregistrer un nouvel article dans la base de données
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'pays_id' => 'required|exists:pays,id',
        ]);


        Ville::create($request->all());

        return redirect()->route('villes.index')->with('success', 'VIlle créé avec succès.');
    }
    // Afficher les détails d'un article
    public function show(Article $article)
    {
        return view('back.articles.show', compact('article'));
    }

    // Afficher le formulaire d'édition d'un article
    public function edit(Article $article)
    {
        $categories = CategorieArticle::all();
        return view('back.articles.edit', compact('article', 'categories'));
    }

    // Mettre à jour un article dans la base de données
    // Mettre à jour un article dans la base de données
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'contenu' => 'required|string',
            'datePublication' => 'required|date',
            'categorie_article_id' => 'required|exists:categorie_articles,id',
            'image' => 'nullable|image|max:2048', // Validation pour l'image
        ]);

        $articleData = $request->except('image');

        // Gérer la mise à jour de l'image
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/articles');
            $articleData['image'] = $imagePath;

            // Supprimer l'ancienne image si elle existe
            if ($article->image && Storage::exists($article->image)) {
                Storage::delete($article->image);
            }
        }

        $article->update($articleData);

        return redirect()->route('articles.index')->with('success', 'Article mis à jour avec succès.');
    }


    // Supprimer un article de la base de données
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index')->with('success', 'Article supprimé avec succès.');
    }

    public function indexa()
    {
        // $categories = CategorieArticle::all();
        //dd($categories);

        return view('back.articles.articles', [
        ]);
    }
}
