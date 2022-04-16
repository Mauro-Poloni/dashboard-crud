@extends('adminlte::page')

@section('title', 'CRUD con Dashboard')

@section('content_header')
<h2>EDITAR REGISTRO</h2>
@stop

@section('content')
<form action="/ventas/{{$venta->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Cliente</label>
        <input type="number" id="id_cliente" class="form-control" name="id_cliente" value="{{$venta->id_cliente}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">fecha_venta</label>
        <input type="date" id="fecha_venta" class="form-control" name="fecha_venta" value="{{$venta->fecha_venta}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Conitos Queso</label>
        <input type="number" id="conitos_queso" class="form-control" name="conitos_queso" value="{{$venta->conitos_queso}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Conitos Pizza</label>
        <input type="number" id="conitos_pizza" class="form-control" name="conitos_pizza" value="{{$venta->conitos_pizza}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Conitos Manteca</label>
        <input type="number" id="conitos_manteca" class="form-control" name="conitos_manteca" value="{{$venta->conitos_manteca}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nachitos clasicos</label>
        <input type="number" id="nachitos_clasicos" class="form-control" name="nachitos_clasicos" value="{{$venta->nachitos_clasicos}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Papas clasicas</label>
        <input type="number" id="papas_clasicas" class="form-control" name="papas_clasicas" value="{{$venta->papas_clasicas}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Papas americanas</label>
        <input type="number" id="papas_americanas" class="form-control" name="papas_americanas" value="{{$venta->papas_americanas}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Palitos salados</label>
        <input type="number" id="palito_salado" class="form-control" name="palito_salado" value="{{$venta->palito_salado}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Bastonicitos</label>
        <input type="number" id="bastoncito" class="form-control" name="bastoncito" value="{{$venta->bastoncito}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Saldo</label>
        <input type="number" id="saldo" class="form-control" name="saldo" value="{{$venta->saldo}}">
    </div>
    <a href="/ventas" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop