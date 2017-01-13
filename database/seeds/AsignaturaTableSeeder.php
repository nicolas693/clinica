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
        'nombre'=>'Drogadicción y Alcoholismo 1',
      ]);
      $asi->save();

      $asi=new Asignatura([
        'id'=>2,
        'nombre'=>'Creación de Explosivos',
      ]);
      $asi->save();

      $asi=new Asignatura([
        'id'=>3,
        'nombre'=>'Técnicas para la Resaca',
      ]);
      $asi->save();
    }
}
