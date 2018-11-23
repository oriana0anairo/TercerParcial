
@extends('layouts.app')

@section('content')
<form action="{{route('agregar')}}" method='POST' >
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
    <input type="number" class="form-control" name="anio" required>
    </label>
  </div>

   
  <div class="form-group">
    <label >Dias de prestamo
    <input type="number" class="form-control" name="dias" required>
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
  <input class="form-check-input" type="radio" name="tipo" id="inlineRadio1" value="normal">
  <label class="form-check-label" for="inlineRadio1">Normal</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="tipo" id="inlineRadio2" value="reserva">
  <label class="form-check-label" for="inlineRadio2">Reserva</label>
</div>

<div class="form-group">
    <label >Area
    <input class="form-control" name="area" required>
    </label>
  </div>

  <button type="submit" class="btn btn-primary">enviar</button>
</form>
@endsection

