<?php

namespace clinica\Models\Procedimiento;

use Illuminate\Database\Eloquent\Model;

class Procedimiento extends Model
{
  protected $table = 'Procedimiento';
  protected $primaryKey = 'id';
  public $timestamps = true;

  protected $fillable = [
  'id','Nombre','Costo'];

      public function asignatura ()
      {
        return $this->belongstoMany('App\Paciente\Ficha', 'Ficha_Procedimiento');
      }
}
