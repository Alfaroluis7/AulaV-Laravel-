<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class materias extends Model
{
    protected $fillable = [
        'id', 'idCurso','nombre','profesor',
    ];

    public function curso(){
        return $this->belongsTo('App\cursos', 'idCurso');
    }
    public function user(){
        return $this->belongsTo('App\User', 'profesor');
    }
}
