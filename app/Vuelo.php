<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vuelo extends Model
{
    protected $table = 'vuelo';
    protected $fillable = ['id_avion','id_lugar','piloto','copiloto'];

    public function avion()
    {
        return $this->belongsTo('App\Avion','id_avion');
    }
   
    public function lugar()
    {
        return $this->belongsTo('App\Lugar','id_lugar');
    }
    public function reservaciones()
    {
        return $this->hasMany('App\Reservacion');
    }
}
