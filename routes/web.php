<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\User;
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

//route de la page de connexion
Route::get('/connexion', function () {
    return view('pages/connexion');
})->name('Connexion');
/*route de la page d'inscription */
Route::get('/formulaire', function () {
    return view('pages/formulaire');
})->name('formulaire');
//route de la page d'initialisation des mots de passe

// Route::get('/connexion', function () {
//     return view('pages/connexion');
// })->name('Page');


Route::get('/admin/connexion', function () {
    return view('admin/connexionadmin');
})->name('Page_admin');
//page utilisateur
Route::get('/layout/user_page',function(){
    return view('pages/layout/page_utilisateur');
})->name('Page_utilisateur');
/**selection des locataire */
Route::get('/liste_locataires',[LocataireController::class,'selection_locataire'])
->name('Liste_locataires');
/**route d'ajout d'un locataire */

Route::get('/ajouter_locataire',[LocataireController::class,'ajouter_locataire'])
->name('Formulaire');

Route::post('/ajouter_locataire',[LocataireController::class,'ajouter_locataire_traitement']);
//inscription admin 
Route::get('/Administration_only', function () {
    return view('admin/inscriptionadmin');
})->name('Enregistrement_Admin');


/**route d'authentification des locataires  */
Route::get('/connecte',[LocataireController::class,'login']);
Route::post('/connecte',[LocataireController::class,'locataire_auth']);

//route de la page d'initialisation des mots de passe
Route::get('/initialisation_password', function () {
    return view('pages/initialisation_password');
})->name('modifier_mot_de_passe');
/**page de l'utilisateur */
Route::get('/layout/page_utilisateur',function(){
    return view('pages/layout/page_utilisateur');
})->name('User_page');


/**gestion  des donnees des administrateurs et des personnels */

Route::get('/admin/compte', function(){
    return view('admin/compte');
});

Route::get('/inscriptionadmin',[AdministrateurController::class,'ajouter_administrateur']);

Route::post('/ajouter/admin', [AdministrateurController::class,'ajouter_administrateur_traitement']);

/**
 * autentification des administrateur
 */
Route::get('/connect',[UtilisateurController::class,'login']);
Route::post('/connect',[UtilisateurController::class,'admin_auth']);

Route::get('/connect/admin',[UtilisateurController::class,'insert_admin']);
Route::post('/connect/admin',[UtilisateurController::class,'insert_admin_traitement']);

/**supression des locataires posssible seulement avec l'authentification des admin */
Route::get('/supprimer/{id}',[AdministrateurController::class,'suprimer_locataire']);

/**la deconnexion */
Route::get('/logout',[LocataireController::class,'logout']);

Route::post('/connexion',[LocataireController::class,'logout_locataire']
)->name('Deconnexion');


/**fichier javascript */



Auth::routes();

