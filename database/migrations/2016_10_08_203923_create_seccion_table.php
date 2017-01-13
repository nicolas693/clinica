<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Seccion', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('numero');

            $table->integer('asignatura_id')->unsigned();
            $table->foreign('asignatura_id')->references('id')->on('asignatura');

            $table->integer('Docente_id')->unsigned();
            $table->foreign('Docente_id')->references('id')->on('docente');

            $table->integer('Alumno_rut')->unsigned();
            $table->foreign('Alumno_rut')->references('alumno_id')->on('Alumno');

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
