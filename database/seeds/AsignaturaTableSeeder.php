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
        'nombre'=>'Clínica del Adulto I',
      ]);
      $asi->save();

      $asi=new Asignatura([
        'id'=>2,
        'nombre'=>'Periodoncia',
      ]);
      $asi->save();

      $asi=new Asignatura([
        'id'=>3,
        'nombre'=>'Clínica del Niño I',
      ]);
      $asi->save();
    }
}
