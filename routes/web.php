<?php

use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

use App\Http\Controllers\CategorieArticleController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\FormationController;


Route::get('/', function () {
    return view('index');
});

Route::get('/formations/nos-formations', function () {
    return view('formations.nos_formations');
})->name('nos-formations');

Route::get('/formations/nos-formations/premiers-pas', function () {
    return view('formations.pages.premier_pas');
})->name('nos-formations.premier_pas');

Route::get('/formations/nos-formations/sevenir-temoin-de-christ', function () {
    return view('formations.pages.devenir_tdc');
})->name('nos-formations.devenir_tdc');

Route::get('/formations/nos-formations/comment-servir-dieu', function () {
    return view('formations.pages.omment_servir');
})->name('nos-formations.comment-servir-dieu');


Route::get('/victoire_pour_christ', function () {
    return view('venir_a_christ');
})->name('victoire_pour_christ');

Route::get('/venir-a-christ', function () {
    return view('cmt_recevoir_christ');
})->name('venir-a-christ');


Route::get('/but-vision-mission', function () {
    return view('a propos.but_vision_mission');
})->name('but-vision-mission');


Route::get('/reseau', function () {
    return view('reseau_tdc.index');
})->name('reseau');

Route::get('/profil', function () {
    return view('reseau_tdc.show');
})->name('profil');

Route::controller(\App\Http\Controllers\reseau_tdc\InscriptionController::class)->group(function () {
    Route::get('/reseau/services', 'index')->name('reseau.services');
    Route::get('/reseau/services/{hashedId}', 'show')->name('reseau.services.show');
    Route::get('/reseau/inscription', 'create')->name('reseau.inscription');
    Route::post('/reseau/inscription', 'store')->name('reseau.store');
    Route::get('/reseau/filter', 'filter')->name('services.filter');
});

Route::get('/reseau/send-verification-code', [\App\Http\Controllers\reseau_tdc\ReseauController::class, 'verificationCode'])->name('verificationCode');
Route::post('/reseau/send-verification-code', [\App\Http\Controllers\reseau_tdc\ReseauController::class, 'sendVerificationCode'])->name('sendVerificationCode');
Route::get('/reseau/verify-code/{prestataire}', [\App\Http\Controllers\reseau_tdc\ReseauController::class, 'showVerificationForm'])->name('showVerificationForm');
Route::post('/reseau/verify-code/{prestataire}', [\App\Http\Controllers\reseau_tdc\ReseauController::class, 'verifyCode'])->name('verifyCode');
Route::get('/reseau/update-prestataire/{prestataire}/{code}', [\App\Http\Controllers\reseau_tdc\ReseauController::class, 'edit'])->name('updatePrestataire');
Route::post('/reseau/update-prestataires/{prestataire}', [\App\Http\Controllers\reseau_tdc\ReseauController::class, 'update'])->name('update');



Route::get('/don', function () {
    return view('don');
})->name('don');


Route::get('/blog', [FrontController::class, 'articles'])->name('blog');

Route::get('/accueil', [FrontController::class, 'index'])->name('index');
Route::get('/article/{article}', [FrontController::class, 'showArticle'])->name('article.show');

Route::post('/check-email', [\App\Http\Controllers\reseau_tdc\InscriptionController::class, 'checkEmail'])->name('check.email');


Route::resource('formations', FormationController::class)->except('destroy', 'show', 'update', 'edit');  //


Route::middleware('auth')->resource('categories', CategorieArticleController::class);  // Routes pour les catégories d'articles
Route::middleware('auth')->resource('articles', ArticleController::class);  // Routes pour les articles
Route::middleware('auth')->resource('villes', \App\Http\Controllers\VilleController::class);  // Routes pour les villes


Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('articles.show');
Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
Route::put('/articles/{article}', [ArticleController::class, 'update'])->name('articles.update');
Route::delete('/articles/{article}', [ArticleController::class, 'destroy'])->name('articles.destroy');


Route::post('/articles/{article}/commentaires', [CommentaireController::class, 'store'])->name('commentaires.store');

