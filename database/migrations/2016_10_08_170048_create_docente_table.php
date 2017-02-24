<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('Docente', function (Blueprint $table) {
       $table->increments('id');
       $table->string('Nombre');
       $table->integer('Telefono');
       $table->String('Email');
       $table->timestamps();

       $table->integer('asignatura_id')->unsigned();
       $table->foreign('asignatura_id')->references('id')->on('asignatura');

       $table->integer('user_id')->unsigned();
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
