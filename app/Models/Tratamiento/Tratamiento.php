<?php

namespace clinica\Models\Tratamiento;

use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
  protected $table='Tratamiento';
  protected $primaryKey='id_Tratamiento';
  public $timestamps=false;

  protected $fillable=[
    'paciente_id','ficha_id','Fecha','DienteTratamiento','AccionR',
    //Insumos
    'Alginmax', 'Alginkid', 'Alginplus_Tropical', 'Servilletas_Dentales',  'Eyector_Saliva', 'Manga_Esterilizacion',
    'Torula_Algodon'];

    public function Ficha (){
      return $this->belongsto(Ficha::class);
    }

    public function Paciente (){
      return $this->belongsto(Paciente::class);
    }
}
