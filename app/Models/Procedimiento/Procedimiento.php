<?php

namespace clinica\Models\Procedimiento;

use Illuminate\Database\Eloquent\Model;

class Procedimiento extends Model
{
  protected $table = 'Procedimiento';
  protected $primaryKey = 'id';
  public $timestamps = false;

  protected $fillable = [
  'id','Apicectomia','Blanqueamiento_Dental','Cementación','Endodoncia','Exodoncia','Explorador_Dental',
  'Gingivectomía','Gingivoplastía','Higiene_Bucodental','Implante_Dental','Limpieza_Dental','Ostectomía','Remineralización_dental',
  'SitioEstado','Tartrectomía','Tecnica_Colgajo','Tecnica_Seno_Maxilar','Regeneracion_Osea','Terapia_Fluoruro'];


      public function asignatura ()
      {
        return $this->belongstoMany('App\Paciente\Ficha', 'Ficha_Procedimiento');
      }
}

/*
'id','Apicectomia','Blanqueamiento_Dental','Cementación','Endodoncia','Exodoncia','Explorador_Dental',
'Gingivectomía','Gingivoplastía','Higiene_Bucodental','Implante_Dental','Limpieza_Dental','Ostectomía','Remineralización_dental',
'SitioEstado','Tartrectomía','Tecnica_Colgajo','Tecnica_Seno_Maxilar','Regeneracion_Osea','Terapia_Fluoruro'];
*/
