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
            $table->String('Expectativas');
            $table->String('Antecedentes_Medicos');
            $table->String('Farmacos_Uso');
            $table->String('Habitos');
            $table->String('Fecha_Ultima_Consulta');
            $table->String('Motivo_Ultima_Consulta');
            $table->String('Antecedentes_Traumatismo');
            $table->String('Fecha_Traumatismo');
            $table->String('Tratamiento_Ortodoncia');
            $table->String('Elem_Higiene');
            $table->String('Anestesia');
            $table->String('Alerta_Medica');
          
            $table->String('paciente_id');
            $table->integer('alumno_id')->unsigned();
            $table->integer('docente_id')->unsigned();


            $table->foreign('paciente_id')->references('rut')->on('Paciente');
            $table->foreign('alumno_id')->references('alumno_id')->on('Alumno');
            $table->foreign('docente_id')->references('id')->on('Docente')

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
