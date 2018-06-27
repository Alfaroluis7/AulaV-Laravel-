<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RespuestasEstudiantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuesta_estudiante', function (Blueprint $table) {
           
            $table->integer('idPregunta')->unsigned();
            $table->foreign('idPregunta')->references('id')->on('preguntas');
            $table->integer('respuestaSE')->unsigned();
            $table->integer('estudiante')->unsigned();
            $table->foreign('estudiante')->references('id')->on('users');
            $table->string('respuestaDesarrollo');
            $table->timestamps();
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
