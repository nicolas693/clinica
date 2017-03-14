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
       $table->Integer('Telefono')->lenght(10);

       $table->primary('id');
       $table->boolean('activo')->default(true);

       $table->integer('asignatura_id')->nullable()->unsigned();
       $table->integer('user_id')->nullable()->unsigned();
   });

   Schema::table('Docente', function($table) {
        $table->foreign('user_id')->references('id')->on('users');
        $table->foreign('asignatura_id')->references('id')->on('asignatura');

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
