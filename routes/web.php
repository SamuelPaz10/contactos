<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\directorioController;
use App\Models\directorio;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/directorio/mostrar', [directorioController::class,'mostrarDirectorios'])->name('directorio.mostrar');

Route::get('/directorio/crear', [directorioController::class, 'crearDirectorios'])->name('directorio.crear');

Route::get('/directorio/buscar', [directorioController::class, 'buscarDirectorios'])->name('directorio.buscar');

Route::get('/directorio/eliminar', [directorioController::class, 'eliminarDirectorios'])->name('directorio.eliminar');