<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Paciente', function (Blueprint $table) {
            $table->String('rut');

            $table->String('Nombre')->length(15);
            $table->String('Paterno')->length(15);
            $table->String('Materno')->length(15);
            $table->String('Fecha_Ingreso')->length(10);
            $table->String('Genero')->length(6);
            $table->String('Fecha_Nacimiento')->length(10);
            $table->Integer('Telefono_Casa');
            $table->Integer('Telefono_Movil');
            $table->String('Calle')->length(25);
            $table->Integer('Numero_Calle');
            $table->String('Pais')->length(15);
            $table->String('Region')->length(15);
            $table->String('Comuna')->length(15);
            $table->String('Nacionalidad')->length(15);
            $table->String('Cobertura_Medica')->length(15);

            $table->primary('rut');
            $table->integer('clinica_id')->unsigned();
            $table->integer('alumno_id')->unsigned();
            $table->integer('Odontograma_id')->unsigned()->nullable();
            $table->boolean('alta');



            $table->foreign('clinica_id')->references('id_Clinica')->on('Clinica');
            $table->foreign('alumno_id')->references('alumno_id')->on('Alumno');
            $table->foreign('Odontograma_id')->references('Odontograma_id')->on('Odontograma');


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
