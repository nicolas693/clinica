<?php

namespace clinica\Models\Paciente;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //

    protected $table= 'Paciente';
    protected $primaryKey= 'rut';

    protected $dates = ['dob'];


    protected $fillable=[
    	'rut','Nombre','Paterno','Materno','Fecha_Ingreso','Genero','Fecha_Nacimiento','Telefono_Casa','Telefono_Movil','Telefono_Oficina', 'Calle','Numero_Calle','Pais','Region','Comuna','Nacionalidad','Cobertura_Medica','clinica_id','rut_alumno','alta'

    ];
    public $timestamps=false;

    public function Clinica (){
    	return $this->belongsto(Clinica::class);
    }

    public function Alumno (){
      return $this->belongsto(Alumno::class);
    }

    public function Ficha (){
        return $this->hasmany(Ficha::class);
    }
}
