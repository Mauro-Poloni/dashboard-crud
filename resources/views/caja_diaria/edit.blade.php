@extends('adminlte::page')

@section('title', 'CRUD con Dashboard')

@section('content_header')
<h2>EDITAR REGISTRO</h2>
@stop

@section('content')
<form action="/cajas_diarias/{{$caja_diaria->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">fecha</label>
        <input type="date" id="fecha" class="form-control" name="fecha" value="{{$caja_diaria->fecha}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">saldo</label>
        <input type="number" id="saldo" class="form-control" name="saldo" value="{{$caja_diaria->saldo}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">cliente_fiado</label>
        <input type="text" id="cliente_fiado" class="form-control" name="cliente_fiado" value="{{$caja_diaria->cliente_fiado}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">cantidad_fiado</label>
        <input type="number" id="cantidad_fiado" class="form-control" name="cantidad_fiado" value="{{$caja_diaria->cantidad_fiado}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">fecha_cancelacio_fiado</label>
        <input type="date" id="fecha_cancelacio_fiado" class="form-control" name="fecha_cancelacio_fiado" step="any" value="{{$caja_diaria->fecha_cancelacio_fiado}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">saldo_fiado</label>
        <input type="number" id="saldo_fiado" class="form-control" name="saldo_fiado" step="any" value="{{$caja_diaria->saldo_fiado}}">
    </div>
    <a href="/cajas_diarias" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop