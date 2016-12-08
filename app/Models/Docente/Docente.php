<?php

namespace clinica\Models\Docente;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $table= 'Docente';
    protected $primarykey= 'id_Docente';
    public $timestamps=false;

    protected $fillable=[
      'id_Docente','Nombre_Docente','id_Asignatura','Telefono_Clinica'];

        public function Paciente (){
          return $this->hasMany(Asignatura::class);
        }
}
