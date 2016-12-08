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
            $table->increments('id');
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
