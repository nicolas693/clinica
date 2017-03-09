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
          $table->String('Fecha');
          $table->String('AccionR');
          $table->integer('Diente');
          $table->String('nProfe');
          $table->String('Insumos');
          $table->integer('Costo');
          $table->String('paciente_id');
          $table->integer('ficha_id')->unsigned();

      });

      Schema::table('Tratamiento', function($table) {
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
        Schema::drop('Tratamiento');
    }
}
