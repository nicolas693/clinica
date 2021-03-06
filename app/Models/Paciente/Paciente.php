<?php

namespace clinica\Models\Paciente;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //

    protected $table= 'Paciente';
    protected $primaryKey= 'rut';
    public $incrementing = false;

    protected $dates = ['dob'];


    protected $fillable=[
    	'rut','Nombre','Paterno','Materno','Fecha_Ingreso','Genero','Fecha_Nacimiento','Telefono_Casa',
      'Telefono_Movil', 'Calle','Numero_Calle','Pais','Region','Comuna','Nacionalidad','Cobertura_Medica',
      'clinica_id','alumno_id','Odontograma_id','Ficha_id','alta',
    ];
    public $timestamps=false;

    public function Clinica (){
    	return $this->belongsto(Clinica::class);
    }

    public function Alumno (){
      return $this->belongsto(Alumno::class);
    }

    public function Ficha (){
        return $this->hasone(Ficha::class);
    }

    public function Tratamiento(){
      return $this->hasmany(Tratamiento::class);
    }

    public function Problema (){
        return $this->hasmany(Problema::class);
    }

    public function Odontograma (){
        return $this->hasone(Odontograma::class);
    }

}
