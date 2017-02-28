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
      'id','asignatura_id','Nombre','Telefono','user_id'];

        public function asignatura ()
        {
          return $this->hasMany(Asignatura::class);
        }

        public function users (){

          return $this->belongsto(users::class);

        }
}
