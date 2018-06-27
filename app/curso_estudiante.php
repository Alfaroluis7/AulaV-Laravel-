<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class curso_estudiante extends Model
{
    protected $fillable = [
        'idCurso', 'estudiante',
        ];

        public function curso(){
            return $this->belongsTo('App\cursos', 'idCurso');
        }
        public function user(){
            return $this->belongsTo('App\User', 'estudiante');
        }

}
