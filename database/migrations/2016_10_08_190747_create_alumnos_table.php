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
            $table->String('alumno_id');
            $table->string('Nombre')->length(15);
            $table->string('Paterno')->length(15);
            $table->string('Materno')->length(15);
            $table->integer('Telefono');
            //$table->float('Calificacion')->nullable();
            //$table->String('Observaciones')->nullable();
            //$table->String('PacienteEvaluado')->nullable();
            $table->primary('alumno_id');
            $table->boolean('activo')->default(true);

            $table->integer('asignatura_id')->nullable()->unsigned();
            $table->foreign('asignatura_id')->references('id')->on('asignatura');

            $table->integer('id_Clinica')->nullable()->unsigned();
            $table->foreign('id_Clinica')->references('id_Clinica')->on('Clinica');

            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');

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
