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
          $table->integer('Apicectomia')->nullable();
          $table->integer('Blanqueamiento_Dental')->nullable();
          $table->integer('Cementación')->nullable();
          $table->integer('Endodoncia')->nullable();
          $table->integer('Exodoncia')->nullable();
          $table->integer('Explorador_Dental')->nullable();
          $table->integer('Gingivectomía')->nullable();
          $table->integer('Gingivoplastía')->nullable();
          $table->integer('Higiene_Bucodental')->nullable();
          $table->integer('Implante_Dental')->nullable();
          $table->integer('Limpieza_Dental')->nullable();
          $table->integer('Ostectomía')->nullable();
          $table->integer('Remineralización_dental')->nullable();
          $table->integer('SitioEstado')->nullable();
          $table->integer('Tartrectomía')->nullable();
          $table->integer('Tecnica_Colgajo')->nullable();
          $table->integer('Tecnica_Seno_Maxilar')->nullable();
          $table->integer('Regeneracion_Osea')->nullable();
          $table->integer('Terapia_Fluoruro')->nullable();
      });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Procedimiento');
    }
}

/*
$table->integer('Apicectomia')->nullable();
$table->integer('Blanqueamiento_Dental')->nullable();
$table->integer('Cementación')->nullable();
$table->integer('Endodoncia')->nullable();
$table->integer('Exodoncia')->nullable();
$table->integer('Explorador_Dental')->nullable();
$table->integer('Gingivectomía')->nullable();
$table->integer('Gingivoplastía')->nullable();
$table->integer('Higiene_Bucodental')->nullable();
$table->integer('Implante_Dental')->nullable();
$table->integer('Limpieza_Dental')->nullable();
$table->integer('Ostectomía')->nullable();
$table->integer('Remineralización_dental')->nullable();
$table->integer('SitioEstado')->nullable();
$table->integer('Tartrectomía')->nullable();
$table->integer('Tecnica_Colgajo')->nullable();
$table->integer('Tecnica_Seno_Maxilar')->nullable();
$table->integer('Regeneracion_Osea')->nullable();
$table->integer('Terapia_Fluoruro')->nullable();
*/
