<?php

use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\reseau_tdc\InscriptionController;
use App\Http\Controllers\reseau_tdc\ReseauController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieArticleController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\FrontController;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () { /* Routes pour la partie administration*/
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('categories', CategorieArticleController::class);  // Routes pour les catégories d'articles
    Route::resource('villes', \App\Http\Controllers\VilleController::class);  // Routes pour les villes
    Route::resource('articles', ArticleController::class); // Route pour les articles
});  // Routes pour la partie administration
Route::prefix('formations')->group(function () {
    Route::get('/', function () {
        return view('formations.index');
    })->name('formations.index');

    Route::prefix('nos-formations')->group(function () {
        Route::get('/', function () {
            return view('formations.nos_formations');
        })->name('nos-formations');

        Route::get('/premiers-pas', function () {
            return view('formations.pages.premier_pas');
        })->name('nos-formations.premier_pas');

        Route::get('/devenir-temoin-de-christ', function () {
            return view('formations.pages.devenir_tdc');
        })->name('nos-formations.devenir_tdc');

        Route::get('/comment-servir-dieu', function () {
            return view('formations.pages.comment_servir');
        })->name('nos-formations.comment-servir-dieu');
    });
});  // Routes pour la section formation
Route::prefix('reseau')->group(function () {
    Route::get('/send-verification-code', [ReseauController::class, 'verificationCode'])->name('verificationCode');
    Route::post('/send-verification-code', [ReseauController::class, 'sendVerificationCode'])->name('sendVerificationCode');

    Route::prefix('verify-code/{prestataire}')->group(function () {
        Route::get('/', [ReseauController::class, 'showVerificationForm'])->name('showVerificationForm');
        Route::post('/', [ReseauController::class, 'verifyCode'])->name('verifyCode');
    });

    Route::prefix('update-prestataire/{prestataire}')->group(function () {
        Route::get('/{code}', [ReseauController::class, 'edit'])->name('updatePrestataire');
        Route::post('/', [ReseauController::class, 'update'])->name('update');
    });
});  // Routes pour la modification d'informations d'un utilisateur
Route::prefix('reseau')->controller(InscriptionController::class)->group(function () {
    Route::get('/services', 'index')->name('reseau.services');
    Route::get('/services/{hashedId}', 'show')->name('reseau.services.show');
    Route::get('/inscription', 'create')->name('reseau.inscription');
    Route::post('/inscription', 'store')->name('reseau.store');
    Route::get('/filter', 'filter')->name('services.filter');
});  // Route pour inscription des prestataires et filtre


Route::view('/', 'index')->name('index');
Route::view('/don', 'don')->name('don');
Route::view('/victoire_pour_christ', 'venir_a_christ')->name('victoire_pour_christ');
Route::view('/venir-a-christ', 'cmt_recevoir_christ')->name('venir-a-christ');
Route::view('/but-vision-mission', 'a propos.but_vision_mission')->name('but-vision-mission');
Route::view('/victoire-avec-christ', 'victoire_avec_christ')->name('venir-a-christ1');
Route::view('/reseau', 'reseau_tdc.index')->name('reseau');
Route::view('/profil', 'reseau_tdc.show')->name('profil');


Route::get('/se-deployer', [FrontController::class, 'articles'])->name('se-deployer');
Route::get('/article/{article}', [FrontController::class, 'showArticle'])->name('article.show');
Route::post('/articles/{article}/commentaires', [CommentaireController::class, 'store'])->name('commentaires.store'); // Commentaire d'un article
Route::post('/check-email', [\App\Http\Controllers\reseau_tdc\InscriptionController::class, 'checkEmail'])->name('check.email');  // Vérificaion d'email

require __DIR__.'/auth.php';
