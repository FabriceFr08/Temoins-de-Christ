<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Ajout de l'import pour Storage
use App\Models\CategorieArticle;

class ArticleController extends Controller
{
    // Afficher la liste des articles
    public function index()
    {
        $categories = CategorieArticle::all();
        $articles = Article::all();
        return view('back.articles.index', compact('articles', 'categories'));
    }

    // Afficher le formulaire de création d'un nouvel article
    public function create()
    {
        $categories = CategorieArticle::all();
        return view('back.articles.create')->with('categories', $categories);
    }

    // Enregistrer un nouvel article dans la base de données
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'contenu' => 'required|string',
            'datePublication' => 'required|date',
            'categorie_article_id' => 'required|exists:categorie_articles,id',
            'image' => 'nullable|image|max:2048', // Validation pour l'image
        ]);

        $articleData = $request->except('image');

        // Gérer l'ajout d'une image
        if ($request->hasFile('image')) {
            $fileName = $request->file('image')->getClientOriginalName();
            $imagePath = $request->file('image')->storeAs('public/images/articles', $fileName);
            $articleData['image'] = str_replace('public/', '', $imagePath);
        }

        Article::create($articleData);

        return redirect()->route('articles.index')->with('success', 'Article créé avec succès.');
    }

    // Afficher le formulaire d'édition d'un article
    public function edit(Article $article)
    {
        $categories = CategorieArticle::all();
        return view('back.articles.edit', compact('article', 'categories'));
    }

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
            $fileName = $request->file('image')->getClientOriginalName();
            $imagePath = $request->file('image')->storeAs('public/images/articles', $fileName);
            $articleData['image'] = str_replace('public/', '', $imagePath);

            // Supprimer l'ancienne image si elle existe
            if ($article->image && Storage::exists('public/' . $article->image)) {
                Storage::delete('public/' . $article->image);
            }
        }

        $article->update($articleData);

        return redirect()->route('articles.index')->with('success', 'Article mis à jour avec succès.');
    }

    // Supprimer un article de la base de données
    public function destroy(Article $article)
    {
        // Supprimer l'image associée à l'article s'il en existe une
        if ($article->image && Storage::exists('public/' . $article->image)) {
            Storage::delete('public/' . $article->image);
        }

        $article->delete();

        return redirect()->route('articles.index')->with('success', 'Article supprimé avec succès.');
    }

    public function indexa()
    {
        return view('back.articles.articles');
    }
}
