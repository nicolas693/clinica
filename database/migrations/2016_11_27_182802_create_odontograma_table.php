<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOdontogramaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('Odontograma', function (Blueprint $table) {
          $table->increments('Odontograma_id');

          $table->String('pieza18',20);
          $table->String('pieza17',20);
          $table->String('pieza15',20);
          $table->String('pieza16',20);
          $table->String('pieza13',20);
          $table->String('pieza14',20);
          $table->String('pieza12',20);
          $table->String('pieza11',20);

          $table->String('pieza21',20);
          $table->String('pieza22',20);
          $table->String('pieza23',20);
          $table->String('pieza24',20);
          $table->String('pieza25',20);
          $table->String('pieza26',20);
          $table->String('pieza27',20);
          $table->String('pieza28',20);

          $table->String('pieza48',20);
          $table->String('pieza47',20);
          $table->String('pieza46',20);
          $table->String('pieza45',20);
          $table->String('pieza44',20);
          $table->String('pieza43',20);
          $table->String('pieza42',20);
          $table->String('pieza41',20);

          $table->String('pieza31',20);
          $table->String('pieza32',20);
          $table->String('pieza33',20);
          $table->String('pieza34',20);
          $table->String('pieza35',20);
          $table->String('pieza36',20);
          $table->String('pieza37',20);
          $table->String('pieza38',20);


          






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
