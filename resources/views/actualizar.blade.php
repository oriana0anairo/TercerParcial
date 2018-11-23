
@extends('layouts.app')

@section('content')
<form action="{{route('libros.put',$id)}}" method='PUT' >
{{csrf_field()}}
  <div class="form-group">
    <label >Nombre
    <input class="form-control" name="nombre" required>
    </label>

  </div>
  <div class="form-group">
    <label>Editorial
    <input class="form-control" name="editorial" required>
    </label>
  </div>

  <div class="form-group">
    <label >Año
    <input type="date" class="form-control" name="anio" required>
    </label>
  </div>


   <div class="form-group">
    <label >Ubicacon
    <input class="form-control" name="ubicacion" required>
    </label>
  </div>

   <div class="form-group">
    <label >Autor
    <input class="form-control" name="autor" required>
    </label>
  </div>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="tipo" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Normal</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="tipo" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">Reserva</label>
</div>

<div class="form-group">
    <label >Area
    <input class="form-control" name="area" required>
    </label>
  </div>

  <button type="submit" class="btn btn-primary">enviar</button>
</form>


