@extends('layouts.app')
@section('header', "Empleado")

@section('content')
<div>
<a href="{{route('empleado.edit')}}" class='btn btn-success'>Agregar empleado</a>

<table class="table">

    <thead class="thead-dark">
      <tr>

        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Edad</th>
        <th scope="col">Cedula</th>
        <th scope="col">Fecha de ingreso</th>

      </tr>
    </thead>
    <tbody>

    @foreach($empleado as $emp)
      <tr>
      <th scope="row">{{$emp->id}}</th>
      <td>{{$emp->nombre}}</td>
      <td>{{$emp->edad}}</td>
      <td>{{$emp->cedula}</td>
      <td>{{$emp->fecha}}</td>
          <a href="{{Route('editarEmpleado')}}" class='btn btn-success'>Editar</a>
      </td>
       </tr>


    @endforeach
</div>
endsection
