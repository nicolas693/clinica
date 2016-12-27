<?php

namespace clinica\Models\Alumnos;

use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    //
    protected $table      = 'Alumno';
    protected $primarykey = 'rut_alumno';
    public    $timestamps = false;

    protected $fillable   = [
        'id_alumno','rut_alumno','asignatura_id','Nombre_Alumno','Apellido_Alumno','Telefono_Alumno'
    ];

    public function Clinica()
    {
        return $this->belongsto(Clinica::class);
    }
    public function asignatura_1()
    {
        return $this->hasmany(Asignatura::class);
    }
}