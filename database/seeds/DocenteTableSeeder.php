<?php

use Illuminate\Database\Seeder;
use clinica\Models\Docente\Docente;

class DocenteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $doc=new Docente([
        'id'=>'15178919-6',
        'Nombre'=>'Armando',
        'Paterno'=>'Casas',
        'Materno'=>'Rojas',
        'Telefono'=>'95816732',
        'asignatura_id'=>'1',
        'user_id'=>'2',

      ]);
      $doc->save();
      $doc=new Docente([
        'id'=>'6583627-0',
        'Nombre'=>'Desarmando',
        'Paterno'=>'Mesas',
        'Materno'=>'Rojas',
        'Telefono'=>'95816732',
        'asignatura_id'=>'2',
        'user_id'=>'5',

      ]);
      $doc->save();
      $doc=new Docente([
        'id'=>'21521685-3',
        'Nombre'=>'Rosamel',
        'Paterno'=>'Rosales',
        'Materno'=>'Rosales',
        'Telefono'=>'95816732',
        'asignatura_id'=>'3',
        'user_id'=>'8',

      ]);
      $doc->save();
    }
}
