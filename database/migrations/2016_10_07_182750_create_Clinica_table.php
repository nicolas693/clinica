<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Clinica', function (Blueprint $table) {
            $table->increments('id_Clinica');

            $table->String('Nombre_Clinica')->length(25);
            $table->String('Direccion_Clinica')->length(30);
            $table->integer('Telefono_Clinica')->length(10);
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      DB::statement('SET FOREIGN_KEY_CHECKS = 0');
      Schema::drop('Clinica');
      DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
