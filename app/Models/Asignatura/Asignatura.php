<?php

namespace clinica\Models\Asignatura;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    protected $table='asignatura';
    protected $table='id_Asignatura';
    protected $fillable =['nombre'];

      public function docente{
          return $this->belongsTo(Docente::class) ;
      }
}
