<?php

namespace clinica\Models\Paciente;

use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{

    protected $table= 'Ficha';
    protected $primaryKey= 'id_Ficha';

    public $timestamps=false;

    protected $fillable=[
    	'id_Ficha','id_Paciente','id_Alumno','alergia'
    ];

    public function Paciente (){
    	return $this->belongsto(Paciente::class);
    }

    public function Alumno (){
    	return $this->belongsto(Alumnos::class);
    }

    public function Tratamiento (){
    	return $this->hasmany(Tratamiento::class);
    }
}
