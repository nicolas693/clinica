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
          'asignatura_id'=>'1',
          'Nombre'=>'Sylvanas',
          'Paterno'=>'Windrunner',
          'Materno'=>'Llanos',
          'Telefono'=>'34627890',
          'id_Clinica'=>'1421',
          'user_id'=>'3',
          'activo'=>'1',
        ]);
        $alum->save();

        $alum=new Alumnos([
          'alumno_id'=>'22023125-9',
          'asignatura_id'=>'2',
          'Nombre'=>'Silvano',
          'Paterno'=>'Correa',
          'Materno'=>'Llanos',
          'Telefono'=>'34627890',
          'id_Clinica'=>'2834',
          'user_id'=>'5',
          'activo'=>'1',
        ]);
        $alum->save();

        $alum=new Alumnos([
          'alumno_id'=>'24555349-8',
          'asignatura_id'=>'3',
          'Nombre'=>'Salomon',
          'Paterno'=>'Rojas',
          'Materno'=>'Casas',
          'Telefono'=>'34627890',
          'id_Clinica'=>'1237',
          'user_id'=>'7',
          'activo'=>'1',
        ]);
        $alum->save();
    }
}
