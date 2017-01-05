<?php

namespace clinica;

use Illuminate\Database\Eloquent\Model;

class Materiales extends Model
{
    protected $table='Material';
    protected $primaryKey='id_Material'

    protected $fillable=[
      'nombre'
    ];
}
