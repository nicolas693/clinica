<?php

namespace clinica\Models\Paciente;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //

    protected $table= 'Paciente';
    protected $primaryKey= 'rut';


    protected $fillable=[
    	'rut','Nombre','Paterno','Materno','Fecha_Ingreso','Genero','Fecha_Naciemiento','Telefono_Casa','Telefono_Movil','Telefono_Oficina', 'Calle','Numero_Calle','Pais','Region','Comuna','Nacionalidad','Cobertura_Medica','id_Clinica'

    ];
    public $timestamps=false;

    public function Clinica (){
    	return $this->belongsto(Clinica::class);
    }

    public function Ficha (){
        return $this->hasmany(Ficha::class);

    }
}
