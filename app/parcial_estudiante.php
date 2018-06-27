<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class parcial_estudiante extends Model
{
    protected $fillable = [
        'idParcial', 'estudiante','nota',
    ];

    public function Parcial(){
        return $this->belongsTo('App\parciales', 'idParcial');
    }
    public function user(){
        return $this->belongsTo('App\User', 'estudiante');
    }
}
