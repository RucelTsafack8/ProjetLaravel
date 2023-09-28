<?php

use Illuminate\Support\Facades\Route;


/**creation des routes de navigation dans les pages */
Route::get('/', function () {
    return view('pages/home');
});

/*route de la page d'acceuil */
Route::get('/home', function () {
    return view('pages/home');
})->name('Acceuil');//nom de la route

/*route de la page d'inscription */
Route::get('/formulaire', function () {
    return view('pages/formulaire');
})->name('formulaire');

//route de la page de connexion
Route::get('/connexion', function () {
    return view('pages/connexion');
})->name('connexion');

//route de la page d'initialisation des mots de passe
Route::get('/initialisation_password', function () {
    return view('pages/initialisation_password');
})->name('modifier_mot_de_passe');


//route de la page d'initialisation des mots de passe
Route::get('/layout/page_utilisateur', function () {
    return view('pages/layout/page_utilisateur');
})->name('Page_utilisateur');


Auth::routes();

