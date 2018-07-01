<?php

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registerP',function(){
        return view('auth.registerP');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/AddCurso','CursosController@add')->name('Curso.Add');

Route::post('/RegisterP','RegisterProfesor@register')->name('Profesor.Add');

Route::get('/HomeEstudiante','EstudianteController@home');

Route::get('/HomeProfesor','ProfesorController@home');


//Administrador
Route::get('/Cursos','AdministradorController@cursos')->name('Cursos.Admin');

Route::get('/Examenes','AdministradorController@examenes')->name('examenes.Admin');

Route::get('/Profesores','AdministradorController@profesores')->name('profesores.Admin');