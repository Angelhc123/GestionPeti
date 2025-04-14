<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Mostrar login en la raíz del sitio
Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');

// Login y logout
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Panel (pantalla principal luego del login)
Route::get('/panel', function () {
    return view('panel');
})->middleware('auth')->name('panel');

// Dashboard opcional (si lo usas)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Perfil
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Ruta adicional de ejemplo
Route::get('/home', function () {
    return 'Bienvenido al sistema';
})->name('home');

// Rutas generadas por Breeze o Fortify
require __DIR__.'/auth.php';
