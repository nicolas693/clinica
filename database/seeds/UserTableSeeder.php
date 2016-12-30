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
    }
}
