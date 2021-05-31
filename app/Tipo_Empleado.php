<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_Empleado extends Model
{
    protected $table = 'tipo_empleado';
    protected $fillable = ['tipo'];

    
    public function empleados()
    {
        return $this->hasMany('App\Empleado');
    }
}
