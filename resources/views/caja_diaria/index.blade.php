@extends('adminlte::page')

@section('title', 'CRUD con Dashboard')

@section('content_header')
<h1>Caja diaria</h1>
@stop

@section('content')
<a href="cajas_diarias/create" class="btn btn-primary mb-3">CREAR</a>

<table id="cajas_diarias" class="table table-dark table-striped mt-4" style="width:100%">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Fecha</th>
            <th scope="col">Saldo</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cajas_diarias as $caja_diaria)
        <tr>
            <td>{{$caja_diaria->id}}</td>
            <td>{{$caja_diaria->fecha}}</td>
            <td>${{$caja_diaria->saldo}}</td>
            <td>
                <form action="{{route('cajas_diarias.destroy',$caja_diaria->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="/cajas_diarias/{{$caja_diaria->id}}/edit" class="btn btn-info">Editar</a>
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<table class="table">
    <thead>
        <tr>Saldo Total</tr>
    </thead>
    <tbody>
        <tr>
            @foreach ($saldos as $saldo)
            <td>${{$saldo->saldo_total}}</td>
            @endforeach
        </tr>
    </tbody>
</table>
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
            <td>${{$venta->saldo}}</td>
        </tr> 
        @endforeach
    </tbody>
</table>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#cajas_diarias').DataTable({
            "lengthMenu": [
                [5, 10, 50, -1],
                [5, 10, 50, "All"]
            ]
        });
    });
</script>
@stop