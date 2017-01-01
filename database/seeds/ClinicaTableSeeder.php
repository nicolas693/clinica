<?php

use Illuminate\Database\Seeder;
use clinica\Models\Paciente\Clinica;

class ClinicaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $cli=new Clinica([
        'id_Clinica'=>1,
        'Nombre_Clinica'=>'Clinica uno',
        'Direccion_Clinica'=>'direccion cualquiera',
        'Telefono_Clinica'=>1234567,
      ]);
      $cli->save();

      $cli=new Clinica([
        'id_Clinica'=>2,
        'Nombre_Clinica'=>'Clinica dos',
        'Direccion_Clinica'=>'direccion cualquiera',
        'Telefono_Clinica'=>1234567,
      ]);
      $cli->save();

      $cli=new Clinica([
        'id_Clinica'=>3,
        'Nombre_Clinica'=>'Clinica tres',
        'Direccion_Clinica'=>'direccion cualquiera',
        'Telefono_Clinica'=>1234567,
      ]);
      $cli->save();
    }
}
