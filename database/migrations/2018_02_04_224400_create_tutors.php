<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('tutor', function (Blueprint $table) {
        $table->Increments('id');
        $table->string('nombre');
        $table->string('profession');
        $table->integer('materias_id');
        $table->integer('alumnos_id');
        $table->foreign('alumnos_id')->references('id')->on('alumnos');
        $table->foreign('materias_id')->references('id')->on ('materias');
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
