<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/accueil', function () {
    return view('index');
});

Route::get('/galerie', function () {
    return view('galerie');
});
