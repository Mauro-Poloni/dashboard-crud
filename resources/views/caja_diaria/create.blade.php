@extends('adminlte::page')

@section('title', 'CRUD con Dashboard')

@section('content_header')
<h2>CREAR REGISTRO</h2>
@stop

@section('content')

<form action="/cajas_diarias" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">fecha</label>
        <input type="date" id="fecha" class="form-control" name="fecha" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">saldo</label>
        <input type="number" id="saldo" class="form-control" name="saldo" tabindex="2" value="0.00" step="any">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">cliente_fiado</label>
        <input type="text" id="cliente_fiado" class="form-control" name="cliente_fiado" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">cantidad_fiado</label>
        <input type="number" id="cantidad_fiado" class="form-control" name="cantidad_fiado" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">fecha_cancelacio_fiado</label>
        <input type="date" id="fecha_cancelacio_fiado" class="form-control" name="fecha_cancelacio_fiado" tabindex="5">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">saldo_fiado</label>
        <input type="number" id="saldo_fiado" class="form-control" name="saldo_fiado" value="0.00" step="any" tabindex="6">
    </div>
    <a href="/cajas_diarias" class="btn btn-secondary" tabindex="7">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="8">Guardar</button>
</form>
<table class="table">
    <thead>
        <tr>
            <th>Fecha</th>
            <th>Saldos</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ventas as $venta)
        <tr>
            <td>{{$venta->fecha}}</td>
            <td>{{$venta->saldo}}</td>
        </tr> 
        @endforeach
    </tbody>
</table>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop