<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnoMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno_materias', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->integer('alumnos_id');
            $table->integer('materias_id');
            $table->foreign('alumnos_id')->references('id')->on('alumnos');
            $table->foreign('materias_id')->references('id')->on('materias');
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
        Schema::dropIfExists('alumno_materias');
    }
}
