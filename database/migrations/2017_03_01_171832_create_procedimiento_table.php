<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcedimientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('Procedimiento', function (Blueprint $table) {
          $table->increments('id');
          $table->String('Procedimiento1')->nullable();
          $table->String('Procedimiento2')->nullable();
          $table->String('Procedimiento3')->nullable();
          $table->String('Procedimiento4')->nullable();
          $table->String('Procedimiento5')->nullable();
          $table->String('Procedimiento6')->nullable();
          $table->String('Procedimiento7')->nullable();
          $table->String('Procedimiento8')->nullable();
          $table->String('Procedimiento9')->nullable();
          $table->String('Procedimiento10')->nullable();
          $table->String('Procedimiento11')->nullable();
          $table->String('Procedimiento12')->nullable();
          $table->String('Procedimiento13')->nullable();
          $table->String('Procedimiento14')->nullable();
          $table->String('Procedimiento15')->nullable();
          $table->String('Procedimiento16')->nullable();
          $table->String('Procedimiento17')->nullable();
          $table->String('Procedimiento18')->nullable();
          $table->String('Procedimiento19')->nullable();

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
