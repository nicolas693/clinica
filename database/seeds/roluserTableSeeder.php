<?php

use Illuminate\Database\Seeder;
use clinica\roluser;

class roluserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $roluser=new roluser([
        'idrol'=>1,
        'Nombre'=>'Admin',
      ]);
      $roluser->save();

      $roluser=new roluser([
        'idrol'=>2,
        'Nombre'=>'Docente',
      ]);
      $roluser->save();

      $roluser=new roluser([
        'idrol'=>3,
        'Nombre'=>'Alumno',
      ]);
      $roluser->save();

      $roluser=new roluser([
        'idrol'=>4,
        'Nombre'=>'Invitado',
      ]);
      $roluser->save();

    }
}
