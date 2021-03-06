<?php

namespace clinica\Models\Paciente;

use Illuminate\Database\Eloquent\Model;

class Clinica extends Model
{
    //

    protected $table= 'Clinica';
    protected $primaryKey= 'id_Clinica';
    public $timestamps=false;

    protected $fillable=[
    	'id_Clinica','Nombre_Clinica','Direccion_Clinica','Telefono_Clinica'];

    public function Paciente (){
    	return $this->hasmany(Paciente::class);
    }

    public function Alumno() {
      return $this->hasMany(Alumno::class);
    }
}
