<?php

namespace clinica\Models\Paciente;

use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    
    protected $table= 'Ficha';
    protected $primarykey= 'id_Ficha';
<<<<<<< HEAD

    protected $fillable=[
    	'id_Ficha';
=======
    public $timestamps=false;

    protected $fillable=[
    	'id_Ficha','id_Paciente'
>>>>>>> refs/remotes/origin/master

    ];

    public function Paciente (){
<<<<<<< HEAD
    	return $this->hasmany(Paciente::class);
=======
    	return $this->belongsto(Paciente::class);
>>>>>>> refs/remotes/origin/master
    }
}
