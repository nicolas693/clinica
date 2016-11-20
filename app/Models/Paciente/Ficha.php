<?php

namespace clinica\Models\Paciente;

use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    
    protected $table= 'Ficha';
    protected $primarykey= 'id_Ficha';

    protected $fillable=[
    	'id_Ficha';

    ];

    public function Paciente (){
    	return $this->hasmany(Paciente::class);
    }
}
