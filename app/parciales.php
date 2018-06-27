<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class parciales extends Model
{
    protected $fillable = [
        'id', 'idMateria','titulo',
    ];

    public function Materia(){
        return $this->belongsTo('App\materias', 'idMateria');
    }
    
}
