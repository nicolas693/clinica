<?php

namespace clinica\Models\Asignatura;

use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    //
    protected $table      = 'Seccion';
    protected $primaryKey = 'id';
    protected $fillable   = ['id','numero'];

    public function asignatura()
    {
        return $this->belongsTo(Asignatura::class);
    }
}
