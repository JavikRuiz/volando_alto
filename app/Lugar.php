<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
    protected $table = 'lugar';
    protected $fillable = ['origen','destino','tarifa'];

    public function vuelos()
    {
        return $this->hasMany('App\Vuelo');
    }
}
