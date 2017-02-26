<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Ficha', function (Blueprint $table) {
            $table->increments('id_Ficha');
            $table->String('Ocupacion');
            $table->String('Fecha_Ingreso');
            $table->String('Motivo_Consulta');
            $table->String('Expectativas')->nullable();
            $table->String('Antecedentes_Medicos');
            $table->String('Farmacos_Uso');
            $table->String('Habitos')->nullable();
            $table->String('Fecha_Ultima_Consulta');
            $table->String('Motivo_Ultima_Consulta');
            $table->boolean('Antecedentes_Traumatismo');
            $table->integer('Diente_Traumatismo')->nullable(); //por que podria no tener ningun diente con traumatismo
            $table->String('Fecha_Traumatismo')->nullable();  //podria no haber tenido nunca una fecha de traumatismo
            $table->String('Tratamiento_Ortodoncia');
            $table->String('Elem_Higiene')->nullable(); //puede no usar nada
            $table->boolean('Anestesia');
            $table->boolean('Complicacion_Anestesia')->nullable(); //podria no haber tenido una complicacion de anestesia,
            //aunque en ese caso se podria dejar como false ese campo
            $table->String('Alerta_Medica')->nullable();


            $table->String('paciente_id');
            $table->String('alumno_id');
            $table->String('docente_id');


            $table->foreign('paciente_id')->references('rut')->on('Paciente');
            $table->foreign('alumno_id')->references('alumno_id')->on('Alumno');
            $table->foreign('docente_id')->references('id')->on('Docente');

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
