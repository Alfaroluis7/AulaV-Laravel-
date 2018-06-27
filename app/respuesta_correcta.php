<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class respuesta_correcta extends Model
{
    protected $fillable = [
        'idPregunta', 'respuestaC',
    ];

    public function preguntas(){
        return $this->belongsTo('App\preguntas', 'idPregunta');
    }
 
}
