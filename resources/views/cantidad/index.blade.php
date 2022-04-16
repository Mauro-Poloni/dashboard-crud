@extends('adminlte::page')

@section('title', 'CRUD con Dashboard')

@section('content_header')
<h1>Stock</h1>
@stop

@section('content')
<table id="articulos" class="table table-dark table-striped mt-4" style="width:100%">
    <thead>
        <tr>
            <th scope="col">Descripción</th>
            <th scope="col">Cantidad</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articulos as $articulo)
        <tr>
            <td>{{$articulo->descripcion}}</td>
            <td>{{$articulo->cantidad}}</td>
            <td>
                <a href="/cantidad/{{$articulo->id}}/edit" class="btn btn-info">Editar</a>
            </td>
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
                [10, 15, 50, -1],
                [10, 15, 50, "All"]
            ],
        });
    });
</script>
@stop