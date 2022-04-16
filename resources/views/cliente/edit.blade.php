@extends('adminlte::page')

@section('title', 'CRUD con Dashboard')

@section('content_header')
<h2>EDITAR REGISTRO</h2>
@stop

@section('content')
<form action="/clientes/{{$clientes->id}}" method="POST">
@csrf
@method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Cliente</label>
        <input type="text" id="cliente" class="form-control" name="cliente" value="{{$clientes->cliente}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Ubicación</label>
        <input type="text" id="ubicacion" class="form-control" name="ubicacion" value="{{$clientes->ubicacion}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Lista</label>
        <input type="text" id="lista" class="form-control" name="lista" value="{{$clientes->lista}}">
    </div>
    <a href="/clientes" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop