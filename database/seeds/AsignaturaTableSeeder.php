<?php

use Illuminate\Database\Seeder;
use clinica\Models\Asignatura\Asignatura;

class AsignaturaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $asi=new Asignatura([
        'id'=>1,
        'nombre'=>'asignatura1',
      ]);
      $asi->save();

      $asi=new Asignatura([
        'id'=>2,
        'nombre'=>'asignatura2',
      ]);
      $asi->save();

      $asi=new Asignatura([
        'id'=>3,
        'nombre'=>'asignatura3',
      ]);
      $asi->save();
    }
}
