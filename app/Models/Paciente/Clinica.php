<?php

namespace clinica\Models\Paciente;

use Illuminate\Database\Eloquent\Model;

class Clinica extends Model
{
    //

    protected $table= 'Clinica';
    protected $primarykey= 'id_Clinica';
    public $timestamps=false;

    protected $fillable=[
    	'id_Clinica','Nombre_Clinica','Direccion_Clinica','Telefono_Clinica'];

    public function Paciente (){
    	return $this->hasmany(Paciente::class);
    }
}
