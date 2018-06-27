<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Materias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::create('materias', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('idCurso')->unsigned();
        $table->foreign('idCurso')->references('id')->on('cursos');
        $table->string('nombre');
        $table->integer('profesor')->unsigned();
        $table->foreign('profesor')->references('id')->on('users');
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
