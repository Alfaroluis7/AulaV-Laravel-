<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterProfesor extends Controller
{
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/HomeProfesor';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {   
        $messages = [
            'required' => 'Este Campo es obligatorio',
            'cedula.integer' => 'Ingrese solo Numeros',
            'name.string' => 'Ingrese solo letras',
            'cedula.unique' => 'Esta cedula ya existe',
            'email.unique' => 'Este correo ya existe'

        ];

        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'cedula' => 'required|integer|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ];

        return Validator::make($data,$rules ,$messages);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {   
        $tipoUsuario =1;
        return User::create([
            'nombre' => $data['name'],
            'apellido' => $data['apellido'],
            'cedula' => $data['cedula'],
            'email' => $data['email'],
            'tipoUsuario_id' => $tipoUsuario, 
            'password' => Hash::make($data['password']),
        ]);

        
    }

  
}
