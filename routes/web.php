<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/accueil', function () {
    return view('index');
})->name('index');

Route::get('/galerie', function () {
    return view('galerie');
});

Route::get('/bibliotheque-hfc', function () {
    return view('bibliotheque');
})->name('bibliotheque');

Route::get('/formation', function () {
    return view('formation');
})->name('formation');
