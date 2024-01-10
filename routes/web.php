<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth;
use App\Http\Controllers\authController;
use App\Http\Controllers\mainController;
use App\Http\Controllers\EntrerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [authController::class, 'index'])->name('authentification');
Route::get('/dashboard', [mainController::class, 'index'])->name('dashboard');
Route::get('/liste-bon-entrer', [EntrerController::class, 'index'])->name('liste-bon-entrer'); //Liste bon d'entrer
Route::get('/creer-bon-entrer', [EntrerController::class, 'store'])->name('creer-bon-entrer'); //Formulaire de creation d'un bon d'entrer
Route::post('/creers-bon-entrer', [EntrerController::class, 'create'])->name('creation-bon-entrer'); // Soumission du formulaire de creation de compte
Route::get('/creer-bon-entrer', [EntrerController::class, 'store'])->name('creer-bon-entrer'); //Formulaire de creation d'un bon d'entrer
Route::post('/creer-bon-entrer', [EntrerController::class, 'create'])->name('creation-bon-entrer'); // Soumission du formulaire de creation de compte
Route::delete('/suppression-bon-entrer', [EntrerController::class, 'destroy'])->name('suppression d\'un bon '); //Supprenion d'un bon d'entrer

/** Les routes de generation des pdf  */

Route::get('generer-pdf', [EntrerController::class, 'createpdf'])->name('generer-pdf');
