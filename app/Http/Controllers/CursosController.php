<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\cursos;

class CursosController extends Controller
{
    public function add(Request $request)
    {   
      
        $this->validate($request, [
            'name' => 'required',
            'descripcion' => 'required',
            ]);

        $curso = new Cursos();
        $curso->nombre = $request->name;
        $curso->Descripcion = $request->descripcion;
        $curso->save();

        //Session::flash('message','Conductor Agregado Correctamente');
        return redirect()->action('AdministradorController@cursos')->with('status', 'Agregado Correctamente');
    }
}
