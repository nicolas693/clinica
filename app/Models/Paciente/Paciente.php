<?php

namespace clinica\Models\Paciente;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //

    protected $table= 'Paciente';
    protected $primarykey= 'rut';

    protected $fillable=[
    	'rut','Nombres','Paterno','Materno','Fecha_Ingreso','Genero','Fecha_Naciemiento','Telefono_Casa','Telefono_Movil','Telefono_Oficina', 'Calle','Numero_Calle','Pais','Region','Comuna','Nacionalidad','Cobertura_Medica'
    ];


    public function Clinica (){
    	return $this->belongsto(Clinica::class);
    }

    public function Clinica (){
    	return $this->belongsto(Clinica::class);
    }
}
