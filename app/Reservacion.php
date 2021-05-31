<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservacion extends Model
{
    protected $table = 'reservacion';
    protected $fillable = ['id_vuelo','id_pasajero'];

    public function vuelo()
    {
        return $this->belongsTo('App\Vuelo','id_vuelo');
    }
    public function pasajero()
    {
        return $this->belongsTo('App\Pasajero','id_pasajero');
    }
}
