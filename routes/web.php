<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('welcome');
});

// Ruta para redirigir a Google
Route::get('auth/google', [LoginController::class, 'redirectToGoogle'])->name('auth.google');

// Ruta para el callback de Google
Route::get('auth/google/callback', [LoginController::class, 'handleGoogleCallback']);
