<?php

namespace clinica\Models\Paciente;

use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    
    protected $table= 'Ficha';
    protected $primarykey= 'id_Ficha';
    public $timestamps=false;

    protected $fillable=[
    	'id_Ficha','id_Paciente'

    ];

    public function Paciente (){
    	return $this->belongsto(Paciente::class);
    }
}
