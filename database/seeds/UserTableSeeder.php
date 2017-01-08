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
        'password'=>Hash::make('admin123'),
        'idrol'=>1,
      ]);
      $User->save();

      $User=new User([
        'id'=>2,
        'name'=>'Docente',
        'email'=>'docente@docente.com',
        'password'=>Hash::make('docente123'),
        'idrol'=>2,
      ]);
      $User->save();

      $User=new User([
        'id'=>3,
        'name'=>'Alumno',
        'email'=>'alumno@alumno.com',
        'password'=>Hash::make('alumno123'),
        'idrol'=>3,
      ]);
      $User->save();



      $User=new User([
        'id'=>4,
        'name'=>'Admin2',
        'email'=>'Admin2@admin.com',
        'password'=>Hash::make('admin123'),
        'idrol'=>1,
      ]);
      $User->save();

      $User=new User([
        'id'=>5,
        'name'=>'Docente2',
        'email'=>'docente2@docente.com',
        'password'=>Hash::make('docente123'),
        'idrol'=>2,
      ]);
      $User->save();

      $User=new User([
        'id'=>6,
        'name'=>'Alumno2',
        'email'=>'alumno2@alumno.com',
        'password'=>Hash::make('alumno123'),
        'idrol'=>3,
      ]);
      $User->save();



      $User=new User([
        'id'=>7,
        'name'=>'Admin3',
        'email'=>'Admin3@admin.com',
        'password'=>Hash::make('admin123'),
        'idrol'=>1,
      ]);
      $User->save();

      $User=new User([
        'id'=>8,
        'name'=>'Docente3',
        'email'=>'docente3@docente.com',
        'password'=>Hash::make('docente123'),
        'idrol'=>2,
      ]);
      $User->save();

      $User=new User([
        'id'=>9,
        'name'=>'Alumno3',
        'email'=>'alumno3@alumno.com',
        'password'=>Hash::make('alumno123'),
        'idrol'=>3,
      ]);
      $User->save();
    }
}
