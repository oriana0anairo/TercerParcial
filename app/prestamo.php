<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prestamo extends Model
{
    protected $table = "prestamo";
    protected $fillable= ["id_libro","id_estudiante","id_empleado","prestamo","entrega"];



    public function libro()
    {
        return $this->hasOne('App\libros');
    }
    public function estudinate()
    {
        return $this->hasOne('App\estudiantes');
    }
    public function empleado()
    {
        return $this->hasOne('App\empleados');
    }
}
