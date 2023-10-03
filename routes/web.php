<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LocataireController;
use App\Http\Controllers\Locataire;

use App\Http\Controllers\AdministrateurController;



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
//route de la page d'initialisation des mots de passe

Route::get('/connexion', function () {
    return view('pages/connexion');
})->name('Page');
/**selection des locataire */
Route::get('/{Page_utilisateur}',[LocataireController::class,'selection_locataire']);
/**route d'ajout d'un locataire */

Route::post('/ajouter_locataire',[LocataireController::class,'ajouter_locataire_traitement']);
//inscription admin 
Route::get('/Administration_only', function () {
    return view('pages/incriptionadmin');
})->name('Enregistrement_Admin');

//route de la page de connexion
Route::get('/connexion', function () {
    return view('pages/connexion');
})->name('Connexion');

Route::get('/connecte',[LocataireController::class,'login']);
Route::post('/connecte',[LocataireController::class,'locataire_auth']);

//route de la page d'initialisation des mots de passe
Route::get('/initialisation_password', function () {
    return view('pages/initialisation_password');
})->name('modifier_mot_de_passe');


/**gestion  des donnees des administrateurs et des personnels */

Route::get('/inscriptionadmin',[AdministrateurController::class,'ajouter_admin']);

Route::post('/ajouter/admin', [AdministrateurController::class,'ajouter_admin_traitement']);


Auth::routes();

