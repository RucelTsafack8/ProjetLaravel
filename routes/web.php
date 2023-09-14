<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages/home');
});
Route::get('/formulaire', function () {
    return view('pages/formulaire');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
