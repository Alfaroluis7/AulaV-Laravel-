<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
Use App\cursos;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        $user = auth()->user();
        if($user->tipoUsuario_id==1)
        return redirect()->action('ProfesorController@home');
        else if($user->tipoUsuario_id==2)
        return redirect()->action('EstudianteController@home');
        else {
            return redirect()->action('AdministradorController@cursos');
        }
    }
}
