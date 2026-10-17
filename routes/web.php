<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::resource('etudiants',EtudiantController::class);