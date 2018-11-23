<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{

    protected $table = "empleados";
    protected $fillable= ["nombre","edad","cedula","fecha"];
 




    public function prestamo()
    {
        return $this->hasOne('App\prestamo');
    }
}
