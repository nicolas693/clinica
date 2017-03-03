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
       $table->String('id');
       $table->string('Nombre')->length(15);
       $table->string('Paterno')->length(15);
       $table->string('Materno')->length(15);
       $table->Integer('Telefono');
       $table->primary('id');

       $table->integer('asignatura_id')->unsigned();
       $table->foreign('asignatura_id')->references('id')->on('asignatura');

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
      DB::statement('SET FOREIGN_KEY_CHECKS = 0');
      Schema::drop('Docente');
      DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
