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


Route::get('/formations', function () {
    return view('formation');
})->name('formation');

Route::get('/venir-a-christ', function () {
    return view('venir_a_christ');
})->name('venir-a-christ');

Route::get('/venir-a-christ1', function () {
    return view('venir_a_christ1');
})->name('venir-a-christ1');

Route::get('/reseau', function () {
    return view('reseau_tdc.index');
})->name('reseau');

Route::get('/profil', function () {
    return view('reseau_tdc.show');
})->name('profil');

Route::controller(\App\Http\Controllers\reseau_tdc\InscriptionController::class)->group(function () {
    Route::get('/reseau/services', 'index')->name('reseau.services');
    Route::get('/reseau/services/{service}', 'show')->name('reseau.services.show');
    Route::get('/reseau/inscription', 'create')->name('reseau.inscription');
    Route::post('/reseau/inscription', 'store')->name('reseau.store');
    Route::get('/reseau/filter', 'filter')->name('services.filter');

});

Route::get('/don', function () {
    return view('don');
})->name('don');


Route::get('/blog', [FrontController::class, 'articles'])->name('blog');

Route::get('/accueil', [FrontController::class, 'index'])->name('index');
Route::get('/article/{article}', [FrontController::class, 'showArticle'])->name('article.show');

Route::post('/check-email', [\App\Http\Controllers\reseau_tdc\InscriptionController::class, 'checkEmail'])->name('check.email');



Route::resource('categories', CategorieArticleController::class);  // Routes pour les catégories d'articles
Route::resource('articles', ArticleController::class);  // Routes pour les articles
Route::resource('villes', \App\Http\Controllers\VilleController::class);  // Routes pour les villes


