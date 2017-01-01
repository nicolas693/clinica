<?php

use Illuminate\Database\Seeder;
use clinica\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $User=new User([
        'id'=>1,
        'name'=>'Admin',
        'email'=>'Admin@admin.com',
        'password'=>bcrypt('admin123'),
        'idrol'=>1,
      ]);
      $User->save();

      $User=new User([
        'id'=>2,
        'name'=>'Docente',
        'email'=>'docente@docente.com',
        'password'=>bcrypt('docente123'),
        'idrol'=>2,
      ]);
      $User->save();

      $User=new User([
        'id'=>3,
        'name'=>'Alumno',
        'email'=>'alumno@alumno.com',
        'password'=>bcrypt('alumno123'),
        'idrol'=>3,
      ]);
      $User->save();

      $User=new User([
        'id'=>4,
        'name'=>'Invitado',
        'email'=>'invitado@invitado.com',
        'password'=>bcrypt('invitado123'),
        'idrol'=>4,
      ]);
      $User->save();
    }
}
