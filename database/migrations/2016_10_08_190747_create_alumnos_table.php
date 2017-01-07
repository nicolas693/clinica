<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('Alumno', function(Blueprint $table)
        {
            $table->increments('rut_alumno');
            $table->string('Nombre_Alumno')->length(15);
            $table->string('Apellido_Alumno')->length(15);
            $table->integer('Telefono_Alumno');

            $table->integer('asignatura_id')->unsigned();
            $table->foreign('asignatura_id')->references('id')->on('asignatura');

            $table->integer('id_Clinica')->unsigned();
            $table->foreign('id_Clinica')->references('id_Clinica')->on('Clinica');

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