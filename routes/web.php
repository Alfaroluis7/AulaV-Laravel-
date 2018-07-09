<?php

Auth::routes();

Route::get('/', function () {
    return view('welcome');
})->name('Principal');

Route::get('/registerP',function(){
        return view('auth.registerP');
});

Route::get('/home', 'HomeController@index')->name('home');


Route::post('/RegisterP','RegisterProfesor@register')->name('Profesor.Add');

Route::get('/HomeEstudiante','EstudianteController@home');

Route::get('/HomeProfesor','ProfesorController@home');
//Cursos

Route::post('/AddCurso','CursosController@store')->name('Curso.Add');

Route::get('/Curso/{id}/Eliminar', 'CursosController@destroy')->name('EliminarCurso');

Route::get('/Curso/{id}/Edit', 'CursosController@edit')->middleware('cors');

//Administrador
Route::get('/Cursos','AdministradorController@cursos')->name('Cursos.Admin')->middleware('Admin');

Route::get('/Examenes','AdministradorController@examenes')->name('examenes.Admin')->middleware('Admin');

Route::get('/Profesores','AdministradorController@profesores')->name('profesores.Admin')->middleware('Admin');