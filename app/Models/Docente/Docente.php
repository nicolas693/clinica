<?php

namespace clinica\Models\Docente;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $table= 'Docente';
    protected $primarykey= 'id';
    public $timestamps=false;

    protected $fillable=[
      'id','asignatura_id','Nombre_Docente','Telefono_Docente'];

        public function asignatura_1(){
          return $this->hasMany(Asignatura::class);
        }
}
