<?php

use Illuminate\Database\Seeder;
use clinica\Models\Paciente\Paciente;

class PacienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pac=new Paciente([
          'rut'=>'17382919-1',
          'Nombre'=>'Tyrion',
          'Paterno'=>'Lannister',
          'Materno'=>'Castamere',
          'Fecha_Ingreso'=>'01/02/2017',
          'Genero'=>'Hombre',
          'Fecha_Nacimiento'=>'05/04/1995',
          'Telefono_Casa'=>'45289712',
          'Telefono_Movil'=>'98713426',
          'Calle'=>'Los Lannister',
          'Numero_Calle'=>'4681',
          'Pais'=>'Westeros',
          'Region'=>'South',
          'Comuna'=>'Castle Rock',
          'Nacionalidad'=>'Clan Lannister',
          'Cobertura_Medica'=>'Lannister Pro',
          'clinica_id'=>'1421',
          'alumno_id'=>'19405168',
          'alta'=>'false',

        ]);
        $pac->save();
    }
}
