<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //
    protected $fillable = ['id', 'nombre', 'apellidos', 'cedula', 'telefono', 'correo'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    //protected $hidden = ['password', 'remember_token'];
    protected $table = 'personas';
}
