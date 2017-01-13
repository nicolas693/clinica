<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Ficha', function (Blueprint $table) {
            $table->increments('id_Ficha');

            $table->integer('paciente_id')->unsigned();
            $table->integer('alumno_id')->unsigned();

            $table->foreign('paciente_id')->references('rut')->on('Paciente');
            $table->foreign('alumno_id')->references('alumno_id')->on('Alumno');


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
