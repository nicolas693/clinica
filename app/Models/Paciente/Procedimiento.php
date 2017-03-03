<?php

namespace clinica;

use Illuminate\Database\Eloquent\Model;

class Procedimiento extends Model
{
  protected $table= 'Procedimiento';
  protected $primaryKey= 'id';
  public $timestamps=false;

  protected $fillable=[
    'id','Nombre'
    ];

  public function Ficha (){
    return $this->belongsto(Ficha::class);
  }
}
