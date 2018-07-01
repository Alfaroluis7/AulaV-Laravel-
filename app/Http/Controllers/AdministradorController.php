<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\cursos;

class AdministradorController extends Controller
{
   public function cursos(){
    
    $cursos = cursos::paginate(6);

    return view('Administrador.cursos', ['cursos' => $cursos]);
   }

   public function examenes(){
 
    return view('Administrador.examenes');
   }

   public function profesores(){
 
    return view('Administrador.Profesores');
   }


}
