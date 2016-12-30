<?php

namespace clinica;

use Illuminate\Database\Eloquent\Model;

class roluser extends Model
{
  protected $table='roluser';
  protected $primaryKey= 'idrol';
  protected $fillable = [
      'idrol', 'Nombre',
  ];

  public function User (){
    return $this->hasmany(User::class);
  }

}
