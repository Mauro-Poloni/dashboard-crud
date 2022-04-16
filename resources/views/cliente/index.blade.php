@extends('adminlte::page')

@section('title', 'CRUD con Dashboard')

@section('content_header')
<h1>Lista de Clientes</h1>
@stop

@section('content')
<a href="clientes/create" class="btn btn-primary mb-3">CREAR</a>

<table id="clientes" class="table table-dark table-striped mt-4" style="width:100%">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Clientes</th>
            <th scope="col">Ubicación</th>
            <th scope="col">Lista</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
        <tr>
            <td>{{$cliente->id}}</td>
            <td>{{$cliente->cliente}}</td>
            <td>{{$cliente->ubicacion}}</td>
            <td>{{$cliente->lista}}</td>
            <td>
                <form action="{{route('clientes.destroy',$cliente->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="/clientes/{{$cliente->id}}/edit" class="btn btn-info">Editar</a>
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<br>
<h3>Top Clientes con mayores compras</h3>
<table class="table">
    <thead>
        <tr>
            <td>Cliente</td>
            <td>Saldo</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes_ventas as $cliente)
        <tr>
            <td>{{$cliente->clientes}}</td>
            <td>${{$cliente->saldo}}</td>
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
        $('#articulos').DataTable({
            "lengthMenu": [
                [5, 10, 50, -1],
                [5, 10, 50, "All"]
            ]
        });
    });
</script>
@stop