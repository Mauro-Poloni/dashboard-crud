@extends('adminlte::page')

@section('title', 'CRUD con Dashboard')

@section('content_header')
<h1>Lista de Articulos</h1>
@stop

@section('content')
<a href="articulos/create" class="btn btn-primary mb-3">CREAR</a>
<table id="articulos" class="table table-dark table-striped mt-4" style="width:100%">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Descripción</th>
            <th scope="col">Código</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articulos as $articulo)
        <tr>
            <td>{{$articulo->id}}</td>
            <td>{{$articulo->descripcion}}</td>
            <td>{{$articulo->codigo}}</td>
            <td>{{$articulo->cantidad}}</td>
            <td>${{$articulo->precio}}</td>
            <td>
                <form action="{{route('articulos.destroy',$articulo->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="/articulos/{{$articulo->id}}/edit" class="btn btn-info">Editar</a>
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
            <th>Articulos</th>
            <th>Stock</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Conitos Queso</td>
            @foreach ($stocks1 as $stock)
            <td>{{$stock->stock}}</td>
            @endforeach
        </tr>
        <tr>
            <td>Conitos Pizza</td>
            @foreach ($stocks2 as $stock)
            <td>{{$stock->stock}}</td>
            @endforeach
        </tr>
        <tr>
            <td>Conitos Manteca</td>
            @foreach ($stocks3 as $stock)
            <td>{{$stock->stock}}</td>
            @endforeach
        </tr>
        <tr>
            <td>Nachitos Clasicos</td>
            @foreach ($stocks4 as $stock)
            <td>{{$stock->stock}}</td>
            @endforeach
        </tr>
        <tr>
            <td>Papas Clasicas</td>
            @foreach ($stocks5 as $stock)
            <td>{{$stock->stock}}</td>
            @endforeach
        </tr>
        <tr>
            <td>Papas Americanas</td>
            @foreach ($stocks6 as $stock)
            <td>{{$stock->stock}}</td>
            @endforeach
        </tr>
        <tr>
            <td>Palitos Salados</td>
            @foreach ($stocks7 as $stock)
            <td>{{$stock->stock}}</td>
            @endforeach
        </tr>
        <tr>
            <td>Bastoncitos</td>
            @foreach ($stocks8 as $stock)
            <td>{{$stock->stock}}</td>
            @endforeach
        </tr>
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