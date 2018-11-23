@extends('layouts.app')
@section('header', "Estudiantes")

@section('content')
<div>
<a href="{{route('agregar.estudiante')}}" class='btn btn-success'>Agregar estudiante</a>

<table class="table">

    <thead class="thead-dark">
      <tr>

        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Edad</th>
        <th scope="col">Cedula</th>
        <th scope="col">Carrera</th>

      </tr>
    </thead>
    <tbody>

    @foreach($estudiantes as $estudiante)
      <tr>
      <th scope="row">{{$estudiante->id}}</th>
      <td>{{$estudiante->nombre}}</td>
      <td>{{$estudiante->edad}}</td>
      <td>{{$estudiante->cedula}}</td>
      <td>{{$estudiante->carrera}}</td>
          <a href="{{Route('editarEstudiante')}}" class='btn btn-success'>Editar</a>
      </td>
       </tr>


    @endforeach
</div>
@endsection

