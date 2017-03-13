<?php

namespace clinica\Models\Docente;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $table = 'Docente';
    protected $primaryKey = 'id';
    public $timestamps = false;
    public $incrementing = false;

    protected $fillable = [
      'id','asignatura_id','Nombre','Paterno','Materno','Telefono','user_id'];
      protected $casts = [
          'arr' => 'array'
      ];

        public function asignatura ()
        {
          return $this->hasMany(Asignatura::class);
        }

        public function users (){

          return $this->belongsto(users::class);

        }

}
