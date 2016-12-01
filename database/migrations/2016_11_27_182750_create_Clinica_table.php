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
           
            $table->String('Nombre_Clinica')->length(20);
            $table->String('Direccion_Clinica')->length(20);
            $table->Integer('Telefono_Clinica');
            

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
