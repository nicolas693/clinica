<?php

namespace clinica\Models\Asignatura;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    protected $table='asignatura';
    protected $primaryKey='id';
    protected $fillable =['id','nombre'];

      public function docente(){
          return $this->belongsTo(Docente::class) ;
      }

      public function alumno(){
        return $this->belongsTo(Alumnos::class);
      }

      public function Seccion(){
        return $this->hasMany(Seccion::class);
      }
}
