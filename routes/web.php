<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\directorioController;
use App\Models\directorio;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/directorio/mostrar', [directorioController::class,'mostrarDirectorios'])->name('directorio.mostrar');

