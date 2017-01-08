<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTratamientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('Tratamiento', function (Blueprint $table) {
          $table->increments('id_Tratamiento');
          $table->String('nombre');
          $table->String('fecha');
          $table->integer('paciente_id')->unsigned();
          $table->integer('ficha_id')->unsigned();

          $table->foreign('paciente_id')->references('rut')->on('Paciente');
          $table->foreign('ficha_id')->references('id_Ficha')->on('Ficha');



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
