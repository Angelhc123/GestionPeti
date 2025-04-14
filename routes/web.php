<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
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

Route::get('/mision', function () {
    return view('mision'); // Vista de la página MISIÓN
})->name('mision');

Route::get('/vision', function () {
    return view('vision'); // Vista de la página VISIÓN
})->name('vision');

Route::get('/valores', function () {
    return view('valores'); // Vista de la página VALORES
})->name('valores');

Route::get('/objetivos', function () {
    return view('objetivos'); // Vista de la página OBJETIVOS
})->name('objetivos');

Route::get('/analisis-interno', function () {
    return view('analisis_interno'); // Vista de la página ANÁLISIS INTERNO
})->name('analisis_interno');

Route::get('/cadena-de-valor', function () {
    return view('cadena_de_valor'); // Vista de la página CADENA DE VALOR
})->name('cadena_de_valor');

Route::get('/matriz-participacion', function () {
    return view('matriz_participacion'); // Vista de la página MATRIZ PARTICIPACIÓN
})->name('matriz_participacion');

Route::get('/matriz-came', function () {
    return view('matriz_came'); // Vista de la página MATRIZ CAME
})->name('matriz_came');

Route::get('/pest', function () {
    return view('pest'); // Vista de la página PEST
})->name('pest');

Route::get('/estrategia', function () {
    return view('estrategia'); // Vista de la página ESTRATEGIA
})->name('estrategia');

Route::get('/las-5-fuerzas', function () {
    return view('las_5_fuerzas'); // Vista de la página LAS 5 FUERZAS DE PORTER
})->name('las_5_fuerzas');

Route::get('/mision', [PageController::class, 'mision'])->name('mision');
Route::get('/vision', [PageController::class, 'vision'])->name('vision');
Route::get('/panel', [PageController::class, 'panel'])->name('panel');
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
