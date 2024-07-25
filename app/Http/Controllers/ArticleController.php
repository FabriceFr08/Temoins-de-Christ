<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\CategorieArticle;
use Illuminate\Support\Facades\Storage;

// use App\Models\CategorieArticle;

// use App\Http\Controllers\CategorieArticleController;


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
             $imagePath = $request->file('image')->store('images/articles');
             $articleData['image'] = $imagePath;
         }

         Article::create($articleData);

         return redirect()->route('articles.index')->with('success', 'Article créé avec succès.');
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

        return view('back.articles.articles', [
        ]);
    }
}
