<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
Use App\cursos;
use App\Http\Requests\CursosRequest;
use Carbon\Carbon;

class CursosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

  
    public function create(CursosRequest $request)
    {   

       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CursosRequest $request)
    {   

        $date = Carbon::now()->toDateString();
        //dd($date);
        if($date>$request->Inicio || $date>$request->Finalizacion)
        return redirect()->action('AdministradorController@cursos')->with('Error', 'No se pudo agregar el Curso
        Selecciones fechas validas');
        
        if($request->Inicio>$request->Finalizacion)
        return redirect()->action('AdministradorController@cursos')->with('Error', 'No se pudo agregar el Curso
        Selecciones fechas validas');
         
        //dd($request);

        $curso = new Cursos();
        $curso->nombre = $request->name;
        $curso->Fecha_Inicio = $request->Inicio;
        $curso->Fecha_Fin = $request->Finalizacion;
        $curso->costo =  $request->costo;
        $curso->Descripcion = $request->descripcion;
        $curso->save();

        return redirect()->action('AdministradorController@cursos')->with('status', 'Agregado Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $curso = cursos::find($id);
        return response()->json($curso->toArray());
   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {   
        
        $curso = cursos::find($request->id);
        $curso->nombre = $request->name;
        $curso->Fecha_Inicio = $request->Inicio;
        $curso->Fecha_Fin = $request->Finalizacion;
        $curso->costo =  $request->costo;
        $curso->Descripcion = $request->descripcion;
        $curso->save();


        return response()->json($curso);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $curso = cursos::find($id);
        $curso->delete();

        return redirect()->action('AdministradorController@cursos')->with('Borrar', 'El Curso ha sido borrado Correctamente');
    }
}
