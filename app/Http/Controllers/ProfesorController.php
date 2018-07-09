<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\cursos;

class ProfesorController extends Controller
{
    public function home(){
        return view('Profesor');
    }
}
