<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\directorio;
use Illuminate\Http\Request;
use Illuminate\Support\Composer;

class directorioController extends Controller
{
    public function mostrarDirectorios(){
        $directorio = new directorio();
        $directorio -> all();

        return view("directorio", compact("directorio"));
        // echo $directorio;
    }

    public function crearDirectorios(Request $request){

        $directorio = new directorio();
        $directorio -> $nombre = $request -> $nombre;
        $directorio -> $apellido = $request -> $apellido;
        $directorio -> $correo = $request -> $correo;
        $directorio -> $telefono = $request -> $telefono;
        $directorio -> save();

        return view("crearEntrada", compact("directorio"));
    }

    public function buscarDirectorios(){
        return view("buscar");
    }

    public function eliminarDirectorios(){
        return view("eliminar");
    }
}
