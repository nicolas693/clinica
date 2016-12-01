<?php

namespace clinica\Models\Paciente;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //

    protected $table= 'Paciente';
    protected $primarykey= 'rut';
<<<<<<< HEAD

    protected $fillable=[
    	'rut','Nombres','Paterno','Materno','Fecha_Ingreso','Genero','Fecha_Naciemiento','Telefono_Casa','Telefono_Movil','Telefono_Oficina', 'Calle','Numero_Calle','Pais','Region','Comuna','Nacionalidad','Cobertura_Medica'
=======
    public $timestamps=false;

    protected $fillable=[
    	'rut','Nombre','Paterno','Materno','Fecha_Ingreso','Genero','Fecha_Nacimiento','Telefono_Casa','Telefono_Movil','Telefono_Oficina', 'Calle','Numero_Calle','Pais','Region','Comuna','Nacionalidad','Cobertura_Medica','id_Clinica'
>>>>>>> refs/remotes/origin/master
    ];


    public function Clinica (){
    	return $this->belongsto(Clinica::class);
    }

<<<<<<< HEAD
    public function Clinica (){
    	return $this->belongsto(Clinica::class);
=======
    public function Ficha (){
        return $this->hasmany(Ficha::class);
>>>>>>> refs/remotes/origin/master
    }
}
