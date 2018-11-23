<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class libros extends Model
{

    protected $table = "libros";
    protected $fillable= ["nombre","editorial","anio","ubicacon","autor","tipo","area","dias"];


    


    public function prestamo()
    {
        return $this->hasOne('App\prestamo');
    }
}
