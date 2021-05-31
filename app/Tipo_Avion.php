<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_Avion extends Model
{
    protected $table = 'tipo_avion';
    protected $fillable = ['tipo'];

    
    public function aviones()
    {
        return $this->hasMany('App\Avion');
    }

}
