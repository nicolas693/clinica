<?php

use Illuminate\Database\Seeder;
use clinica\Models\Alumnos\Alumnos;

class AlumnoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alum=new Alumnos([
          'alumno_id'=>'19405168-9',
          'asignatura_id'=>'2',
          'Nombre'=>'Sylvanas',
          'Paterno'=>'Windrunner',
          'Materno'=>'Llanos',
          'Telefono'=>'34627890',
          'id_Clinica'=>'1421',
          'user_id'=>'6'
          //'Observaciones'=>'Ninguna',
          //'Calificacion'=>'2.1',
          //'PacienteEvaluado'=>'Carlitos Lechuga'
        ]);
        $alum->save();
    }
}
