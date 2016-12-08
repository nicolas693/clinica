<?php

namespace clinica\Models\Asignatura;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    protected $table='asignatura';
    protected $primarykey='id';
    protected $fillable =['id','nombre'];

      public function docente_1(){
          return $this->belongsTo(Docente::class) ;
      }
}
