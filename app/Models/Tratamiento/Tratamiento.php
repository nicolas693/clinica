<?php

namespace clinica\Models\Tratamiento;

use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
  protected $table='Tratamiento';
  protected $primaryKey='id_Tratamiento';
  public $timestamps=false;

  protected $fillable=[
    'paciente_id','ficha_id','nProfe','Fecha','Diente','AccionR','Costo','Insumos'];

    public function Ficha (){
      return $this->belongsto(Ficha::class);
    }

    public function Paciente (){
      return $this->belongsto(Paciente::class);
    }
}
