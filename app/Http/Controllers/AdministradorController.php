<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\cursos;

class AdministradorController extends Controller
{
   public function home(){
    
    $cursos = cursos::paginate(5);
 
    return view('Administrador.cursos', ['cursos' => $cursos]);
   }
}
