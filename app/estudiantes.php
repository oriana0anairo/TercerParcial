<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estudiantes extends Model
{
    
    protected $table = "estudiantes";
    protected $fillable= ["nombre","edad","cedula","carrera"];
    public function prestamo()
    {
        return $this->hasOne('app\prestamo');
    }
}
