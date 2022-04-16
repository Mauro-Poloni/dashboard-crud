@extends('adminlte::page')

@section('title', 'CRUD con Dashboard')

@section('content_header')
<h1>Stock</h1>
@stop

@section('content')

<table id="stock" class="table table-dark table-striped mt-4" style="width:100%">
    <thead>
        <tr>
            <th scope="col">Articulo</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Ventas</th>
            <th scope="col">Stock Disponible</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            @foreach ($nom1 as $nom)
            <td>{{$nom->descripcion}}</td>
            @endforeach
            @foreach ($cantidad1 as $cantidad)
            <td>{{$cantidad->cantidad}}</td>
            @endforeach
            @foreach ($venta1 as $venta)
            <td>{{$venta->venta}}</td>
            @endforeach
            @foreach ($stocks1 as $stock)
            <td>{{$stock->stock}}</td>
            @endforeach
        </tr>
        <tr>
            @foreach ($nom2 as $nom)
            <td>{{$nom->descripcion}}</td>
            @endforeach
            @foreach ($cantidad2 as $cantidad)
            <td>{{$cantidad->cantidad}}</td>
            @endforeach
            @foreach ($venta2 as $venta)
            <td>{{$venta->venta}}</td>
            @endforeach
            @foreach ($stocks2 as $stock)
            <td>{{$stock->stock}}</td>
            @endforeach
        </tr>
        <tr>
            @foreach ($nom3 as $nom)
            <td>{{$nom->descripcion}}</td>
            @endforeach
            @foreach ($cantidad3 as $cantidad)
            <td>{{$cantidad->cantidad}}</td>
            @endforeach
            @foreach ($venta3 as $venta)
            <td>{{$venta->venta}}</td>
            @endforeach
            @foreach ($stocks3 as $stock)
            <td>{{$stock->stock}}</td>
            @endforeach
        </tr>
        <tr>
            @foreach ($nom4 as $nom)
            <td>{{$nom->descripcion}}</td>
            @endforeach
            @foreach ($cantidad4 as $cantidad)
            <td>{{$cantidad->cantidad}}</td>
            @endforeach
            @foreach ($venta4 as $venta)
            <td>{{$venta->venta}}</td>
            @endforeach
            @foreach ($stocks4 as $stock)
            <td>{{$stock->stock}}</td>
            @endforeach
        </tr>
        <tr>
            @foreach ($nom5 as $nom)
            <td>{{$nom->descripcion}}</td>
            @endforeach
            @foreach ($cantidad5 as $cantidad)
            <td>{{$cantidad->cantidad}}</td>
            @endforeach
            @foreach ($venta5 as $venta)
            <td>{{$venta->venta}}</td>
            @endforeach
            @foreach ($stocks5 as $stock)
            <td>{{$stock->stock}}</td>
            @endforeach
        </tr>
        <tr>
            @foreach ($nom6 as $nom)
            <td>{{$nom->descripcion}}</td>
            @endforeach
            @foreach ($cantidad6 as $cantidad)
            <td>{{$cantidad->cantidad}}</td>
            @endforeach
            @foreach ($venta6 as $venta)
            <td>{{$venta->venta}}</td>
            @endforeach
            @foreach ($stocks6 as $stock)
            <td>{{$stock->stock}}</td>
            @endforeach
        </tr>
        <tr>
            @foreach ($nom7 as $nom)
            <td>{{$nom->descripcion}}</td>
            @endforeach
            @foreach ($cantidad7 as $cantidad)
            <td>{{$cantidad->cantidad}}</td>
            @endforeach
            @foreach ($venta7 as $venta)
            <td>{{$venta->venta}}</td>
            @endforeach
            @foreach ($stocks7 as $stock)
            <td>{{$stock->stock}}</td>
            @endforeach
        </tr>
        <tr>
            @foreach ($nom8 as $nom)
            <td>{{$nom->descripcion}}</td>
            @endforeach
            @foreach ($cantidad8 as $cantidad)
            <td>{{$cantidad->cantidad}}</td>
            @endforeach
            @foreach ($venta8 as $venta)
            <td>{{$venta->venta}}</td>
            @endforeach
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
                [5, 10, 50, -1],
                [5, 10, 50, "All"]
            ]
        });
    });
</script>
@stop