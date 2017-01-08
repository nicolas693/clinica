<?php

namespace clinica\Models\Alumnos;

use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    //
    protected $table      = 'Alumno';
    protected $primarykey = 'rut_alumno';
    public    $timestamps = false;

    protected $fillable   = [
        'rut_alumno','asignatura_id','Nombre_Alumno','Apellido_Alumno','Telefono_Alumno','id_Clinica','user_id'
    ];

    public function Clinica()
    {
        return $this->belongsto(Clinica::class);
    }

    public function users (){

      return $this->belongsto(users::class);

    }
    public function asignatura_1()
    {
        return $this->hasmany(Asignatura::class);
    }

    public function Paciente (){
    	return $this->hasmany(Paciente::class);
    }

    public function Ficha(){
      return $this->hasmany(Ficha::class);
    }
}
