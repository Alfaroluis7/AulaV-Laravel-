<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cursos extends Model
{
    protected $fillable = [
        'id', 'nombre','Descripcion',
    ];
}
