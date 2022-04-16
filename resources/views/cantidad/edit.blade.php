@extends('adminlte::page')

@section('title', 'CRUD con Dashboard')

@section('content_header')
<h2>EDITAR REGISTRO</h2>
@stop

@section('content')
<form action="/cantidad/{{$articulo->id}}" method="POST">
@csrf
@method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Descripción</label>
        <input type="text" id="descripcion" class="form-control" name="descripcion" value="{{$articulo->descripcion}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Cantidad de articulos vendidos:</label>
        <p style="color: red;">Por favor, restar los articulos vendidos al stock</p>
        <input type="number" id="cantidad" class="form-control" name="cantidad" value="{{$articulo->cantidad}}">
    </div>
    <a href="/cantidad" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop