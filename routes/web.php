<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieArticleController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\FrontController;

Route::get('/', function () {
    return view('index');
});

Route::get('/galerie', function () {
    return view('galerie');
})->name('galerie');

Route::get('/bibliotheque-hfc', function () {
    return view('bibliotheque');
})->name('bibliotheque');

Route::get('/formations', function () {
    return view('formation');
})->name('formation');

Route::get('/reseau', function () {
    return view('reseau_tdc.index');
})->name('reseau');

Route::get('/inscription', function () {
    return view('reseau_tdc.inscription');
})->name('inscription');


Route::get('/don', function () {
    return view('don');
})->name('don');


Route::get('/blog', [FrontController::class, 'articles'])->name('blog');

Route::get('/accueil', [FrontController::class, 'index'])->name('index');
Route::get('/article/{article}', [FrontController::class, 'showArticle'])->name('article.show');



// Route::get('/autre', [\App\Http\Controllers\ArticleController::class, 'indexa']
// )->name('articles');
// Route::get('/detail', [\App\Http\Controllers\ArticleController::class, 'detail']
// )->name('blag');


// Routes pour les catégories d'articles
Route::get('/categories', [CategorieArticleController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategorieArticleController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategorieArticleController::class, 'store'])->name('categories.store');
Route::get('/categories/{categorieArticle}', [CategorieArticleController::class, 'show'])->name('categories.show');
Route::get('/categories/{categorieArticle}/edit', [CategorieArticleController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{categorieArticle}', [CategorieArticleController::class, 'update'])->name('categories.update');
Route::delete('/categories/{categorieArticle}', [CategorieArticleController::class, 'destroy'])->name('categories.destroy');


// Routes pour les articles

Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('articles.show');
Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
Route::put('/articles/{article}', [ArticleController::class, 'update'])->name('articles.update');
Route::delete('/articles/{article}', [ArticleController::class, 'destroy'])->name('articles.destroy');
