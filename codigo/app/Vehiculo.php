<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    //
    protected $fillable = ['id','marca','placa','color'];
    protected $table = 'vehiculos';
   
}
