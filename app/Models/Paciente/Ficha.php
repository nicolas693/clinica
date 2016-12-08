<?php

namespace clinica\Models\Paciente;

use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{

    protected $table= 'Ficha';
    protected $primarykey= 'id';

    public $timestamps=false;

    protected $fillable=[
    	'id','paciente_id'
    ];

    public function Paciente (){

    	return $this->hasmany(Paciente::class);

    	return $this->belongsto(Paciente::class);

    }
}
