<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichaprocedimientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Ficha_Procedimiento', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ficha_id')->unsigned();
            $table->foreign('ficha_id')->references('id_Ficha')->on('Ficha')->onDelete('cascade');
            $table->integer('procedimiento_id')->unsigned();
            $table->foreign('procedimiento_id')->references('id')->on('Procedimiento')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Ficha_Procedimiento');
    }
}
