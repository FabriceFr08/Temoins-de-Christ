<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategorieArticle;

class CategorieArticleController extends Controller
{
    // Afficher la liste des catégories
    public function index()
    {
        $categories = CategorieArticle::all();
        return view('back.categories.index', compact('categories'));
    }

    // Afficher le formulaire de création d'une nouvelle catégorie
    public function create()
    {
        return view('back.categories.create');
    }

    // Enregistrer une nouvelle catégorie dans la base de données
    public function store(Request $request)
    {
        $request->validate([
            'nomCategorie' => 'required|string|max:255|unique:categorie_articles',
        ]);


        CategorieArticle::create([
            'nomCategorie' => $request->input('nomCategorie'),
        ]);
            $nom = $request->nomCategorie;
        return redirect()->route('categories.index')->with('success', 'Catégorie "'.$nom.'" créée avec succès.');
    }

    // Afficher les détails d'une catégorie
    public function show(CategorieArticle $categorieArticle)
    {
        return view('back.categories.show', compact('categorieArticle'));
    }

    // Afficher le formulaire d'édition d'une catégorie
    public function edit(CategorieArticle $categorieArticle)
    {
        return view('back.categories.edit', compact('categorieArticle'));
    }

    // Mettre à jour une catégorie dans la base de données
    public function update(Request $request, CategorieArticle $categorieArticle)
    {
        $request->validate([
            'nomCategorie' => 'required|string|max:255|unique:categorie_articles,nomCategorie,'.$categorieArticle->id,
        ]);

        $categorieArticle->update([
            'nomCategorie' => $request->input('nomCategorie'),
        ]);

        return redirect()->route('categories.index')->with('success', 'Catégorie mise à jour avec succès.');
    }

    // Supprimer une catégorie de la base de données
    public function destroy(CategorieArticle $categorieArticle)
    {
        $categorieArticle->delete();
        return redirect()->route('categories.index')->with('success', 'Catégorie supprimée avec succès.');
    }
}
