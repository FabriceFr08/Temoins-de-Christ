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

Route::get('/profil', function () {
    return view('reseau_tdc.profil');
})->name('profil');

Route::controller(\App\Http\Controllers\reseau_tdc\InscriptionController::class)->group(function () {
    Route::get('/reseau/services', 'index')->name('reseau.services');
    Route::get('/reseau/inscription', 'create')->name('reseau.inscription');
    Route::post('/reseau/inscription', 'store')->name('reseau.store');
});

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



Route::resource('categories', CategorieArticleController::class);  // Routes pour les catégories d'articles

Route::resource('articles', ArticleController::class);  // Routes pour les articles
