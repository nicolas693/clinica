<?php

namespace clinica;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $table='users';
     protected $primaryKey='id';

    protected $fillable = [
        'name', 'email', 'password','idrol',
    ];

    protected $guarded = 'permisos';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roluser (){

      return $this->belongsto(roluser::class);

    }

    public function Alumnos ()
    {
    	return $this->hasone(Alumnos::class);
    }

    public function Docente ()
    {
    	return $this->hasone(Docente::class);
    }
}
