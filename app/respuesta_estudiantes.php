<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class respuesta_estudiantes extends Model
{
    protected $fillable = [
        'idPregunta', 'respuestaSE','estudiante','respuestaDesarrollo',
    ];

    public function preguntas(){
        return $this->belongsTo('App\preguntas', 'idPregunta');
    }

    public function user(){
        return $this->belongsTo('App\User', 'estudiante');
    }

}
