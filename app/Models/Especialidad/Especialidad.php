<?php

namespace clinica\Models\Especialidad;

use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    protected $table='Especialidad';
    protected $primaryKey='id_Especialidad';
    public $timestamps=false;

    protected $fillable=[
      'nombre'];
}
