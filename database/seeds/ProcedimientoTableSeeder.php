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
     /*
     $table->boolean('Apicectomia')->nullable();
     $table->boolean('Blanqueamiento_Dental')->nullable();
     $table->boolean('Empaste')->nullable();
     $table->boolean('Endodoncia')->nullable();
     $table->boolean('Exodoncia')->nullable();
     $table->boolean('Explorador_Dental')->nullable();
     $table->boolean('Gingivectomía')->nullable();
     $table->boolean('Gingivoplastía')->nullable();
     $table->boolean('Higiene_Bucodental')->nullable();
     $table->boolean('Implante_Dental')->nullable();
     $table->boolean('Limpieza_Dental')->nullable();
     $table->boolean('Ostectomía')->nullable();
     $table->boolean('Remineralización_dental')->nullable();
     $table->boolean('SitioEstado')->nullable();
     $table->boolean('Tartrectomía')->nullable();
     $table->boolean('TecnicaColgajo')->nullable();
     $table->boolean('TecnicaSenoMaxilar')->nullable();
     $table->boolean('RegeneracionOsea')->nullable();
     $table->boolean('TerapiaFluoruro')->nullable();

     */
    public function run()
    {
      $proc=new Procedimiento([
        'id'=>1,
        'Nombre'=>'Apicectomía',
      ]);
      $proc->save();

      $proc=new Procedimiento([
        'id'=>2,
        'Nombre'=>'Blanqueamiento Dental',
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
