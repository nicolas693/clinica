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
            $table->timestamps();
            $table->String('Ocupacion');
            $table->String('Fecha_Ingreso');
            $table->String('Motivo_Consulta');
            $table->String('Expectativas')->nullable();

            //Antecedentes_Medicos
            $table->boolean('EnfCardiovasculares')->default(false);
            $table->boolean('EnfGastrointestinales')->default(false);
            $table->boolean('EnfRespiratorias')->default(false);
            $table->boolean('EnfNeurologicas')->default(false);
            $table->boolean('EnfIntectocontagiosas')->default(false);
            $table->boolean('DiscrasiaSanguinea')->default(false);
            $table->boolean('Diabetes')->default(false);
            $table->boolean('Alergia')->default(false);
            $table->boolean('Embarazo')->default(false);
            $table->boolean('OtraEnf')->default(false);
            $table->String('NombreOtra')->nullable();
            $table->String('Farmacos_Uso');
            //Habitos
            $table->boolean('Fuma')->default(false);
            $table->boolean('Drogas')->default(false);
            $table->boolean('Alcohol')->defaul(false);

            $table->String('Fecha_Ultima_Consulta');
            $table->String('Motivo_Ultima_Consulta');
            $table->boolean('Antecedentes_Traumatismo');
            $table->String('DienteTraumatismo')->nullable(); //por que podria no tener ningun diente con traumatismo
            $table->String('Fecha_Traumatismo')->nullable();  //podria no haber tenido nunca una fecha de traumatismo
            //Elementos de Higiene
            $table->boolean('Cepillo')->default(false);
            $table->boolean('SedaDental')->default(false);
            $table->boolean('Dentrífico')->default(false);
            $table->boolean('Colutorio')->default(false);
            $table->boolean('Otros')->default(false);
            $table->String('NombreOtros')->nullable();

            //Procedimientos
            $table->boolean('Apicectomia')->nullable();
            $table->boolean('Blanqueamiento_Dental')->nullable();
            $table->boolean('Cementación')->nullable();
            $table->boolean('Endodoncia')->nullable();
            $table->boolean('Exodoncia')->nullable();
            $table->boolean('Explorador_Dental')->nullable();
            $table->boolean('Gingivectomía')->nullable();
            $table->boolean('Gingivoplastía')->nullable();
            $table->boolean('Higiene_Bucodental')->nullable();
            $table->boolean('Implante_Dental')->nullable();
            $table->boolean('Limpieza_Dental')->nullable();
            $table->boolean('Ostectomía')->nullable();
            $table->boolean('Remineralización_dental')->nullable();
            $table->boolean('SitioEstado')->nullable();
            $table->boolean('Tartrectomía')->nullable();
            $table->boolean('Tecnica_Colgajo')->nullable();
            $table->boolean('Tecnica_Seno_Maxilar')->nullable();
            $table->boolean('Regeneracion_Osea')->nullable();
            $table->boolean('Terapia_Fluoruro')->nullable();

            $table->boolean('Anestesia');
            $table->boolean('Complicacion_Anestesia')->nullable(); //podria no haber tenido una complicacion de anestesia,
            //aunque en ese caso se podria dejar como false ese campo
            $table->String('Complicacion')->nullable();
            $table->String('Alerta_Medica')->nullable(); //Saber que la persona tiene hipertension o tiene problemas con la anestesia


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
        Schema::drop('Ficha');
    }
}
