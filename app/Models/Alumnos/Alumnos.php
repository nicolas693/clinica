<?php

namespace clinica\Models\Alumnos;

use Illuminate\Database\Eloquent\Model;
use clinica\Models\Asignatura\Asignatura;

class Alumnos extends Model
{
    //
    protected $table      = 'Alumno';
    protected $primaryKey = 'alumno_id';
    public    $timestamps = false;
    public  $incrementing = false;

    protected $fillable   = [
        'alumno_id','asignatura_id','user_id','docente_id','Nombre','Paterno','Materno','Telefono','id_Clinica',
        'Observaciones','Calificacion','PacienteEvaluado'
    ];

    public function Clinica()
    {
        return $this->belongsto(Clinica::class);
    }

    public function Docente()
    {
       return $this->belongsto(Docente::class);
    }

    public function users (){

      return $this->belongsto(users::class);

    }
    public function asignatura ()
    {
        return $this->hasmany(Asignatura::class);
    }

    public function paciente1()
    {
        return $this->belongsTo(Paciente::class);
    }

    public function Paciente (){
    	return $this->hasmany(Paciente::class);
    }

    public function Ficha(){
      return $this->hasmany(Ficha::class);
    }
}
