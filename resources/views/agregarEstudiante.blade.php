@extends('layouts.app')

@section('content')
<form action="{{route('agregar.estudiante')}}" method='POST' >

{{csrf_field()}}



  <div class="form-group">
    <label >Nombre
    <input class="form-control" name="nombre" required>
    </label>

  </div>
  <div class="form-group">
    <label>Edad
    <input class="form-control" name="edad" required>
    </label>
  </div>


   <div class="form-group">
    <label >Cedula
    <input class="form-control" name="cedula" required>
    </label>
  </div>

   <div class="form-group">
    <label >Carrera
    <input class="form-control" name="carrera" required>
    </label>
  </div>


  <button type="submit" class="btn btn-primary">enviar</button>
</form>

