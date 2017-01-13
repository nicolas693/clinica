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
          'Nombre_Alumno'=>'Sylvanas',
          'Apellido_Alumno'=>'Windrunner',
          'Telefono_Alumno'=>'34627890',
          'id_Clinica'=>'2',
          'user_id'=>'6',
        ]);
        $alum->save();
    }
}
