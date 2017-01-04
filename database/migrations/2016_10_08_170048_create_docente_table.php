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
      Schema::create('docente', function (Blueprint $table) {
       $table->increments('id');
       $table->string('Nombre_Docente');
       $table->integer('Telefono_Docente');
       $table->timestamps();

       $table->integer('asignatura_id')->unsigned();
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
        //
    }
}
