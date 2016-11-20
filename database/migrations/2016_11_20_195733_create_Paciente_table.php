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
            $table->primary('rut');

            $table->string('Nombre')->length(15);
            $table->string('Paterno')->length(15);
            $table->string('Materno')->length(15);
            $table->Date('Fecha_Ingreso');
            $table->string('Genero')->length(1);
            $table->Date('Fecha_Nacimiento');
            $table->Integer('Telefono_Casa');
            $table->Integer('Telefono_Movil');
            $table->Integer('Telefono_Oficina');
            $table->String('Calle')->length(15);
            $table->Integer('Numero_Calle');
            $table->String('Pais')->length(15);
            $table->String('Region')->length(15);
            $table->String('Comuna')->length(15);
            $table->String('Nacionalidad')->length(15);
            $table->String('Cobertura_Medica')->length(15);

            $table->integer('id_Clinica')->unsigned();
            $table->integer('id_Ficha')->unsigned();

            $table->timestamps();
         


            $table->foreign('id_Clinica')->references('id_Clinica')->on('Clinica');
            $table->foreign('id_Ficha')->references('id_Ficha')->on('Ficha');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
