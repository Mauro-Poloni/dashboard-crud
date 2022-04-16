@extends('adminlte::page')

@section('title', 'CRUD con Dashboard')

@section('content_header')
<h2>CREAR REGISTRO</h2>
@stop

@section('content')

<form action="/articulos" method="POST">
@csrf
    <div class="mb-3">
        <label for="" class="form-label">Código</label>
        <input type="text" id="codigo" class="form-control" name="codigo" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Descripción</label>
        <input type="text" id="descripcion" class="form-control" name="descripcion" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Cantidad</label>
        <input type="number" id="cantidad" class="form-control" name="cantidad" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Precio</label>
        <input type="number" id="precio" class="form-control" name="precio" value="0.00" step="any">
    </div>
    <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop