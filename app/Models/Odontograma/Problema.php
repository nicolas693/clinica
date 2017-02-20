<?php

namespace clinica\Models\Odontograma;

use Illuminate\Database\Eloquent\Model;

class Problema extends Model
{
  protected $table      = 'Problema';
  protected $primarykey = 'Problema_id';
  public    $timestamps = false;

  protected $fillable   = [
    'Problema_1',
    'Problema_2',
    'Problema_3',
    'Problema_4',
    'Problema_5',
    'Problema_6',
    'Problema_7',
    'Problema_8',
    'Problema_9',
    'Problema_10',
    'Problema_11',
    'Problema_12',
    'Problema_13',
    'Problema_14'



  ];

  public function Odontograma (){
    return $this->Hasone(Odontograma::class);
  }

}
