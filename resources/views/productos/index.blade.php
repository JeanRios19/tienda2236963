@extends('layouts.principal')

@section('contenido')
 
<div class="row">
    <div class=""></div>
    <div class="blue-text"><h1 align="center"> catalogo de productos </h1>
    </div>
  </div>
@foreach($productos as $producto)
<div class="card">
    <div class="card-content" align="center">
      <h4 >{{ $producto->imagen }}</h4>
    </div>
    <div class="card-tabs">
        <div align="center">
    <img src="{{ asset('img/'.$producto->imagen) }}" width="250" height="250">
      <ul class="tabs tabs-fixed-width">
        <li class="tab"><a href="#test4">Seleccione</a></li>
      </ul>
      </div>
    </div>
    <div align="center" class="card-content grey lighten-4" >
      <h6>Descripcion:  {{ $producto->descripcion }}</h6>
      <h6>Precio: {{ $producto->precio }}</h6>
      <h6>Marca: {{ $producto->marca_id}}</h6>
      <h6>Categoria: {{ $producto->categoria_id }}</h6>
    </div>
  </div>
  



@endforeach
@endsection