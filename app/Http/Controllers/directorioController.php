<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class directorioController extends Controller
{
    public function mostrarDirectorios(){
        return view("directorio");
    }
}
