<?php

use Illuminate\Database\Seeder;
use clinica\Models\Procedimiento\Procedimiento;

class ProcedimientoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
      $proc=new Procedimiento([
        'id'=>1,
        'Nombre'=>'Apicectomía',
        'Costo'=>'15000'
      ]);
      $proc->save();

      $proc=new Procedimiento([
        'id'=>2,
        'Nombre'=>'Blanqueamiento Dental',
        'Costo'=>'3000'
      ]);
      $proc->save();

      $proc=new Procedimiento([
        'id'=>3,
        'Nombre'=>'Cementación',
      ]);
      $proc->save();

      $proc=new Procedimiento([
        'id'=>4,
        'Nombre'=>'Endodoncia',
      ]);
      $proc->save();

      $proc=new Procedimiento([
        'id'=>5,
        'Nombre'=>'Exodoncia',
      ]);
      $proc->save();

      $proc=new Procedimiento([
        'id'=>6,
        'Nombre'=>'Explorador Dental',
      ]);
      $proc->save();

      $proc=new Procedimiento([
        'id'=>7,
        'Nombre'=>'Gingivectomía',
      ]);
      $proc->save();

      $proc=new Procedimiento([
        'id'=>8,
        'Nombre'=>'Gingivoplastía',
      ]);
      $proc->save();

      $proc=new Procedimiento([
        'id'=>9,
        'Nombre'=>'Higiene Bucodental',
      ]);
      $proc->save();

      $proc=new Procedimiento([
        'id'=>10,
        'Nombre'=>'Implante Dental',
      ]);
      $proc->save();

      $proc=new Procedimiento([
        'id'=>11,
        'Nombre'=>'Limpieza Dental',
      ]);
      $proc->save();

      $proc=new Procedimiento([
        'id'=>12,
        'Nombre'=>'Ostectomía',
      ]);
      $proc->save();

      $proc=new Procedimiento([
        'id'=>13,
        'Nombre'=>'Remineralización Dental',
      ]);
      $proc->save();

      $proc=new Procedimiento([
        'id'=>14,
        'Nombre'=>'Sitio/Estado',
      ]);
      $proc->save();

      $proc=new Procedimiento([
        'id'=>15,
        'Nombre'=>'Tartrectomía',
      ]);
      $proc->save();

      $proc=new Procedimiento([
        'id'=>16,
        'Nombre'=>'Técnica de elevación del colgajo',
      ]);
      $proc->save();

      $proc=new Procedimiento([
        'id'=>17,
        'Nombre'=>'Técnica de elevación del seno maxilar',
      ]);
      $proc->save();

      $proc=new Procedimiento([
        'id'=>18,
        'Nombre'=>'Técnica de regeneración ósea guiada',
      ]);
      $proc->save();

      $proc=new Procedimiento([
        'id'=>19,
        'Nombre'=>'Terapia de fluoruro',
      ]);
      $proc->save();

    }
}

/*
$pro=new Procedimiento([
  'id'=>'1',
  'Apicectomia'=>'15000',
  'Blanqueamiento_Dental'=>'3000',
  'Cementación'=>'4000',
  'Endodoncia'=>'5500',
  'Exodoncia'=>'30000',
  'Explorador_Dental'=>'14000',
  'Gingivectomía'=>'3990',
  'Gingivoplastía'=>'34500',
  'Higiene_Bucodental'=>'22333',
  'Implante_Dental'=>'1234',
  'Limpieza_Dental'=>'500',
  'Ostectomía'=>'9000',
  'Remineralización_dental'=>'10000',
  'SitioEstado'=>'1000',
  'Tartrectomía'=>'4000',
  'Tecnica_Colgajo'=>'6000',
  'Tecnica_Seno_Maxilar'=>'25000',
  'Regeneracion_Osea'=>'30000',
  'Terapia_Fluoruro'=>'45000',
]);
$pro->save();
*/
