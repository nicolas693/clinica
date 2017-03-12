<?php

namespace clinica\Models\Procedimiento;

use Illuminate\Database\Eloquent\Model;

class Procedimiento extends Model
{
  protected $table = 'Procedimiento';
  protected $primaryKey = 'id';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
  'id','Procedimiento1','Procedimiento2','Procedimiento3','Procedimiento4','Procedimiento5','Procedimiento6',
  'Procedimiento7','Procedimiento8','Procedimiento9','Procedimiento10','Procedimiento11','Procedimiento12','Procedimiento13',
  'Procedimiento14','Procedimiento15','Procedimiento16','Procedimiento17','Procedimiento18','Procedimiento19'];

      public function asignatura ()
      {
        return $this->belongsto(Asignatura::class);
      }
}
