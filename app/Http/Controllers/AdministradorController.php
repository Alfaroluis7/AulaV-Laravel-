<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\cursos;
Use Carbon\Carbon;
class AdministradorController extends Controller
{
   public function cursos(){
       
    $cursos = cursos::paginate(6);
    $obtenervalue = 1;
    return view('Administrador.cursos', compact('cursos','obtenervalue'));
   }

   public function examenes(){
 
    return view('Administrador.examenes');
   }

   public function profesores(){
 
    return view('Administrador.Profesores');
   }


}
