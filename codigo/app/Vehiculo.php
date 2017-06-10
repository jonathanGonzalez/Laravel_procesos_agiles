<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    //
    protected $fillable = ['id', 'tipo','marca','placa','color'];
    protected $table = 'vehiculos';
   
   public function parqueos()
    {
        return $this->hasMany('App\Parqueo');
    }
}
