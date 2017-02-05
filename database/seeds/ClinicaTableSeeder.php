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
        'id_Clinica'=>1421,
        'Nombre_Clinica'=>'Clínica Las Lilas',
        'Direccion_Clinica'=>'Avenida El Principito 1943',
        'Telefono_Clinica'=>1234567,
      ]);
      $cli->save();

      $cli=new Clinica([
        'id_Clinica'=>2834,
        'Nombre_Clinica'=>'Clínica Los Tulipanes',
        'Direccion_Clinica'=>'Avenida Oliver Twist 1838',
        'Telefono_Clinica'=>1234567,
      ]);
      $cli->save();

      $cli=new Clinica([
        'id_Clinica'=>1237,
        'Nombre_Clinica'=>'Clínica Girasol',
        'Direccion_Clinica'=>'Calle El Lobo Estepario 1927',
        'Telefono_Clinica'=>1234567,
      ]);
      $cli->save();
    }
}
