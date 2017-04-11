<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parqueo extends Model
{
    protected $fillable = ['id','fecha','hora','tipo', 'persona_id', 'vehiculo_id', 'usuario_id'];
    protected $table = 'parqueos';

    public function personas()
    {
        return $this->belongsTo('App\Persona');
    }
    public function vehiculos()
    {
        return $this->belongsTo('App\Vehiculo');
    }
    public function usuarios()
    {
        return $this->belongsTo('App\User');
    }

}
