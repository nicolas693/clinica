<?php

namespace clinica\Models\Tratamiento;

use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
  protected $table='Tratamiento';
  protected $primaryKey='id_Tratamiento';
  public $timestamps=false;

  protected $fillable=[
    'id_Paciente','id_Ficha','nProfe','Fecha','Diente','AccionR','Costo'];

    public function Tratamiento (){
      return $this->belongsto(Ficha::class);
    }
}
