<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('pages/home');
// });
Route::get('/', function () {
    return view('base');
});
Route::get('/home', function () {
    return view('pages/home');
})->name('Acceuil');
Route::get('/formulaire', function () {
    return view('pages/formulaire');
})->name('formulaire');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
