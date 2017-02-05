<?php

namespace clinica\Models\Paciente;

use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{

    protected $table = 'Ficha';
    protected $primaryKey = 'id_Ficha';

    public $timestamps = false;

    protected $fillable = [
    	'id_Ficha','Nombre','Paterno','Materno','rut','Motivo_Consulta','Antecedentes_Medicos','Farmacos_Uso','Habitos',
        'Datos_Consulta_Anterior','Antecedentes_Traumatismo','Tratamiento_Ortodoncia','paciente_id','alumno_id',
    ];
    //Antecedentes_Medicos:Enfermedades Cardiovasculares, Gastrointestinales, Respiratorias, Neurologicas, Infectocontagiosas
    //Continuacion..., Discrasias sanguineas,Diabetes, Alergias, Embaraso, otro.
    //Habitos: Drogas, Alcohol,Cigarros, etc.
    //Datos_Consulta_Anterior: Fecha de consulta anterior y Motivo_Consulta anterior.
    //Antecedentes_Traumatismo Dentoalveolar.
    //Tratamiento_Ortodoncia: No, En Tratamiento~Fecha de inicio o Si~Tiempo de tratamiento.

    //EL RUT YA ESTA DISPONIBLE, PACIENTE_ID REFERENCIA A RUT EN LAS MIGRACIONES

    public function Paciente (){
    	return $this->belongsto(Paciente::class);
    }

    public function Alumno (){
    	return $this->belongsto(Alumnos::class);
    }

    public function Tratamiento (){
    	return $this->hasmany(Tratamiento::class);
    }

    public function Clinica(){
        return $this->belongsto(Clinica::class);
    }
}
