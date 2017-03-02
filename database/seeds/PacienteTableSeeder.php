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
          'alumno_id'=>'19405168-9',
          'alta'=>'false',
        ]);
        $pac->save();

        $pac=new Paciente([
          'rut'=>'6456982-1',
          'Nombre'=>'Jaime',
          'Paterno'=>'Lannister',
          'Materno'=>'Castamere',
          'Fecha_Ingreso'=>'01/02/2017',
          'Genero'=>'Hombre',
          'Fecha_Nacimiento'=>'05/04/1995',
          'Telefono_Casa'=>'45289712',
          'Telefono_Movil'=>'12343426',
          'Calle'=>'Los Lannister',
          'Numero_Calle'=>'4681',
          'Pais'=>'Westeros',
          'Region'=>'South',
          'Comuna'=>'Castle Rock',
          'Nacionalidad'=>'Clan Lannister',
          'Cobertura_Medica'=>'Lannister Pro',
          'clinica_id'=>'1421',
          'alumno_id'=>'19405168-9',
          'alta'=>'false',
        ]);
        $pac->save();

        $pac=new Paciente([
          'rut'=>'13587534-1',
          'Nombre'=>'Cersei',
          'Paterno'=>'Lannister',
          'Materno'=>'Castamere',
          'Fecha_Ingreso'=>'01/02/2017',
          'Genero'=>'Mujer',
          'Fecha_Nacimiento'=>'05/04/1995',
          'Telefono_Casa'=>'45289712',
          'Telefono_Movil'=>'56784356',
          'Calle'=>'Los Lannister',
          'Numero_Calle'=>'4681',
          'Pais'=>'Westeros',
          'Region'=>'South',
          'Comuna'=>'Castle Rock',
          'Nacionalidad'=>'Clan Lannister',
          'Cobertura_Medica'=>'Lannister Pro',
          'clinica_id'=>'1421',
          'alumno_id'=>'19405168-9',
          'alta'=>'false',
        ]);
        $pac->save();

        $pac=new Paciente([
          'rut'=>'12073129-7',
          'Nombre'=>'Rhaegar',
          'Paterno'=>'Targaryen',
          'Materno'=>'Targaryen',
          'Fecha_Ingreso'=>'01/02/2017',
          'Genero'=>'Hombre',
          'Fecha_Nacimiento'=>'05/04/1995',
          'Telefono_Casa'=>'45289712',
          'Telefono_Movil'=>'99874356',
          'Calle'=>'Avenida Rocadragón',
          'Numero_Calle'=>'4681',
          'Pais'=>'Valyria',
          'Region'=>'Valyria',
          'Comuna'=>' Rocadragón',
          'Nacionalidad'=>'Clan Targaryen',
          'Cobertura_Medica'=>'Targaryen Pro',
          'clinica_id'=>'2834',
          'alumno_id'=>'22023125-9',
          'alta'=>'false',
        ]);
        $pac->save();

        $pac=new Paciente([
          'rut'=>'23696240-7',
          'Nombre'=>'Daenerys',
          'Paterno'=>'Targaryen',
          'Materno'=>'Targaryen',
          'Fecha_Ingreso'=>'01/02/2017',
          'Genero'=>'Mujer',
          'Fecha_Nacimiento'=>'05/04/1995',
          'Telefono_Casa'=>'45289712',
          'Telefono_Movil'=>'56556756',
          'Calle'=>'Avenida Rocadragón',
          'Numero_Calle'=>'4681',
          'Pais'=>'Valyria',
          'Region'=>'Valyria',
          'Comuna'=>' Rocadragón',
          'Nacionalidad'=>'Clan Targaryen',
          'Cobertura_Medica'=>'Targaryen Pro',
          'clinica_id'=>'2834',
          'alumno_id'=>'22023125-9',
          'alta'=>'false',
        ]);
        $pac->save();


        $pac=new Paciente([
          'rut'=>'10936648-k',
          'Nombre'=>'Aegon',
          'Paterno'=>'Targaryen',
          'Materno'=>'Targaryen',
          'Fecha_Ingreso'=>'01/02/2017',
          'Genero'=>'Hombre',
          'Fecha_Nacimiento'=>'05/04/1995',
          'Telefono_Casa'=>'45289712',
          'Telefono_Movil'=>'66784356',
          'Calle'=>'Avenida Rocadragón',
          'Numero_Calle'=>'4681',
          'Pais'=>'Valyria',
          'Region'=>'Valyria',
          'Comuna'=>' Rocadragón',
          'Nacionalidad'=>'Clan Targaryen',
          'Cobertura_Medica'=>'Targaryen Pro',
          'clinica_id'=>'2834',
          'alumno_id'=>'22023125-9',
          'alta'=>'false',
        ]);
        $pac->save();


        $pac=new Paciente([
          'rut'=>'10377682-1',
          'Nombre'=>'Arya',
          'Paterno'=>'Stark',
          'Materno'=>'Tully',
          'Fecha_Ingreso'=>'01/02/2017',
          'Genero'=>'Mujer',
          'Fecha_Nacimiento'=>'05/04/1995',
          'Telefono_Casa'=>'45289712',
          'Telefono_Movil'=>'85634521',
          'Calle'=>' Avenida Invernalia',
          'Numero_Calle'=>'4589',
          'Pais'=>'Poniente',
          'Region'=>'Norte',
          'Comuna'=>' Invernalia',
          'Nacionalidad'=>'Casa Stark',
          'Cobertura_Medica'=>'Winter Pro',
          'clinica_id'=>'1237',
          'alumno_id'=>'24555349-8',
          'alta'=>'false',
        ]);
        $pac->save();


        $pac=new Paciente([
          'rut'=>'7289306-9',
          'Nombre'=>'Sansa',
          'Paterno'=>'Stark',
          'Materno'=>'Tully',
          'Fecha_Ingreso'=>'01/02/2017',
          'Genero'=>'Mujer',
          'Fecha_Nacimiento'=>'05/04/1995',
          'Telefono_Casa'=>'45289712',
          'Telefono_Movil'=>'85600021',
          'Calle'=>' Avenida Invernalia',
          'Numero_Calle'=>'4589',
          'Pais'=>'Poniente',
          'Region'=>'Norte',
          'Comuna'=>' Invernalia',
          'Nacionalidad'=>'Casa Stark',
          'Cobertura_Medica'=>'Winter Pro',
          'clinica_id'=>'1237',
          'alumno_id'=>'24555349-8',
          'alta'=>'false',
        ]);
        $pac->save();

        $pac=new Paciente([
          'rut'=>'18531632-7',
          'Nombre'=>'Jon',
          'Paterno'=>'Snow',
          'Materno'=>'Snow',
          'Fecha_Ingreso'=>'01/02/2017',
          'Genero'=>'Hombre',
          'Fecha_Nacimiento'=>'05/04/1995',
          'Telefono_Casa'=>'45289712',
          'Telefono_Movil'=>'11200021',
          'Calle'=>'El muro',
          'Numero_Calle'=>'4589',
          'Pais'=>'Poniente',
          'Region'=>'Norte',
          'Comuna'=>' Invernalia',
          'Nacionalidad'=>'Casa Stark',
          'Cobertura_Medica'=>'Night Watch Pro',
          'clinica_id'=>'1237',
          'alumno_id'=>'24555349-8',
          'alta'=>'false',
        ]);
        $pac->save();
    }
}
