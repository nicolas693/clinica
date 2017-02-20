<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProblemaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('Problema', function (Blueprint $table) {
          $table->increments('Problema_id');

          $table->boolean('Problema_1')->default(false);
          $table->boolean('Problema_2')->default(false);
          $table->boolean('Problema_3')->default(false);
          $table->boolean('Problema_4')->default(false);
          $table->boolean('Problema_5')->default(false);
          $table->boolean('Problema_6')->default(false);
          $table->boolean('Problema_7')->default(false);
          $table->boolean('Problema_8')->default(false);
          $table->boolean('Problema_9')->default(false);
          $table->boolean('Problema_10')->default(false);
          $table->boolean('Problema_11')->default(false);
          $table->boolean('Problema_12')->default(false);
          $table->boolean('Problema_13')->default(false);
          $table->boolean('Problema_14')->default(false);





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
