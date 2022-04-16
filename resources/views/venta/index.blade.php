@extends('adminlte::page')

@section('title', 'CRUD con Dashboard')

@section('content_header')
<h1>Lista de Ventas</h1>
@stop

@section('content')
<a href="ventas/create" class="btn btn-primary mb-3">CREAR</a>
<table id="ventas" class="table table-dark table-striped mt-4" style="width:100%">
    <thead>
        <tr>
            <th scope="col">Cliente</th>
            <th scope="col">Fecha venta</th>
            <th scope="col">Conitos Queso</th>
            <th scope="col">Conitos Pizza</th>
            <th scope="col">Conitos Manteca</th>
            <th scope="col">Nachitos Clasicos</th>
            <th scope="col">Papas Clasicas</th>
            <th scope="col">Papas Americanas</th>
            <th scope="col">Palitos Salados</th>
            <th scope="col">Bastoncitos</th>
            <th scope="col">Saldo</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ventas as $venta)
        <tr>
            <td>{{$venta->id_cliente}}</td>
            <td>{{$venta->fecha_venta}}</td>
            <td>{{$venta->conitos_queso}}</td>
            <td>{{$venta->conitos_pizza}}</td>
            <td>{{$venta->conitos_manteca}}</td>
            <td>{{$venta->nachitos_clasicos}}</td>
            <td>{{$venta->papas_clasicas}}</td>
            <td>{{$venta->papas_americanas}}</td>
            <td>{{$venta->palito_salado}}</td>
            <td>{{$venta->bastoncito}}</td>
            <td>${{$venta->saldo}}</td>
            <td>
                <form action="{{route('ventas.destroy',$venta->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="/ventas/{{$venta->id}}/edit" class="btn btn-info">Editar</a>
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Cliente</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($nombres as $cliente)
        <tr>
            <td>{{$cliente->id}}</td>
            <td>{{$cliente->cliente}}</td>
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