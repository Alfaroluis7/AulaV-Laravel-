<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class preguntas extends Model
{
    protected $fillable = [
        'id', 'idParcial','idTipo','pregunta','valor',
    ];

    public function parcial(){
        return $this->belongsTo('App\parciales', 'idParcial');
    }
    public function tipo_pregunta(){
    	return $this->belongsTo('App\tipo_pregunta', 'idTipo');
    }
}
