<?php

namespace clinica\Models;

use Illuminate\Database\Eloquent\Model;

class Clinica extends Model
{
    //

    protected $table= 'Clinca';
    protected $primarykey= 'id_Clinica';

    protected $fillable=[
    	'id_Clinica','Nombre_Clinica','Direccion_Clinica','Telefono_Clinica';

    ];

    public function Paciente (){
    	return $this->hasmany(Paciente::class);
    }
}
