@extends('layouts.app')
@section('header', "Libros")

@section('content')
<div>
<a href="{{route('vista.edit')}}" class='btn btn-success'>Agregar libro</a>

<table class="table">

    <thead class="thead-dark">
      <tr>

        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Editorial</th>
        <th scope="col">Año</th>
        <th scope="col">Ubicacion</th>
        <th scope="col">Autor</th>
        <th scope="col">Tipo</th>
        <th scope="col">Area</th>
        <th scope="col">Dias</th>

      </tr>
    </thead>
    <tbody>

    @foreach($libros as $libro)
      <tr>
      <th scope="row">{{$libro->id}}</th>
      <td>{{$libro->nombre}}</td>
      <td>{{$libro->editorial}}</td>
      <td>{{$libro->anio}}</td>
      <td>{{$libro->ubicacion}}</td>
      <td>{{$libro->tipo}}</td>
      <td>{{$libro->Area}}</td>
      <td>{{$libro->dias}}</td>
  
  

      <td>
          <a href="{{route('editarLibro',$libro-> id)}}" class='btn btn-success'>Editar</a>
      </td>
       </tr>


    @endforeach
</div>
