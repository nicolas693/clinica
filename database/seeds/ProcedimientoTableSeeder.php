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
    }
}
