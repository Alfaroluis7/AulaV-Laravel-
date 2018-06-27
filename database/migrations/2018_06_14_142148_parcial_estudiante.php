<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ParcialEstudiante extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcial_estudiante', function (Blueprint $table) {
            $table->integer('idParcial')->unsigned();
            $table->foreign('idParcial')->references('id')->on('parciales');
            $table->integer('estudiante')->unsigned();
            $table->foreign('estudiante')->references('id')->on('users');
            $table->string('nota');
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
