<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEspecialidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('Especialidad', function (Blueprint $table) {
       $table->increments('id_Especialidad');
       $table->timestamps();

       $table->integer('asignatura_id')->unsigned();
       $table->foreign('asignatura_id')->references('id')->on('asignatura');
       $table->integer('paciente_id')->unsigned();
       $table->foreign('paciente_id')->references('rut')->on('Paciente');
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
