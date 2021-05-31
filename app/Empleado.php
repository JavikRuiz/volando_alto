<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleado';
    protected $fillable = ['id_tipo_empleado','nombre'];

    public function tipo_empleado()
    {
        return $this->belongsTo('App\Tipo_Empleado','id_tipo_empleado');
    }
   
}
