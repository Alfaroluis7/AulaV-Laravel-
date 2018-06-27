<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RespuestaCorrecta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuesta_correcta', function (Blueprint $table) {
            $table->integer('idPregunta')->unsigned();
            $table->foreign('idPregunta')->references('id')->on('preguntas');
            $table->integer('respuestaC')->unsigned();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
