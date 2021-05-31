<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avion extends Model
{
    protected $table = 'avion';
    protected $fillable = ['id_tipo_avion','identificacion','cant_pasajeros'];

    public function tipo_avion()
    {
        return $this->belongsTo('App\Tipo_Avion','id_tipo_avion');
    }
    
    public function vuelos()
    {
        return $this->hasMany('App\Vuelo');
    }
}
