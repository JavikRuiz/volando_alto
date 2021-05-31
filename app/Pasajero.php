<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasajero extends Model
{
    protected $table = 'pasajero';
    protected $fillable = ['nombre','apellido','documento','correo','telefono'];

    
    public function reservaciones()
    {
        return $this->hasMany('App\Reservacion');
    }
}
