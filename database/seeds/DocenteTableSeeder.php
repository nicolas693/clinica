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
        'asignatura_id'=>'2',
        'user_id'=>'5',

      ]);
      $doc->save();
    }
}
