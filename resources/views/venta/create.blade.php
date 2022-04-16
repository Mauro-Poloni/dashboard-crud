@extends('adminlte::page')

@section('title', 'CRUD con Dashboard')

@section('content_header')
<h2>CREAR REGISTRO</h2>
@stop

@section('content')
<form action="/ventas" method="POST">
    @csrf
    <div class="mb-3">
        <label for="id_cliente" class="form-label">Nombre del cliente</label>
        <select name="id_cliente" class="form-select" tabindex="1">
            <option value="" class="form-option">seleccione...</option>
            @foreach ($clientes as $cliente)
            <option value="{{$cliente->id}}" class="form-option">{{$cliente->cliente}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">fecha_venta</label>
        <input type="date" id="fecha_venta" class="form-control" name="fecha_venta" tabindex="2" value="0">
    </div>
    <div class="mb-3">
        <label for="conitos_queso" class="form-label">conitos_queso</label>
        <input type="text" id="conitos_queso" class="form-control" name="conitos_queso" tabindex="3" value="0">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">conitos_pizza</label>
        <input type="number" id="conitos_pizza" class="form-control" name="conitos_pizza" tabindex="4" value="0">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">conitos_manteca</label>
        <input type="number" id="conitos_manteca" class="form-control" name="conitos_manteca" tabindex="5" value="0">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">nachitos_clasicos</label>
        <input type="number" id="nachitos_clasicos" class="form-control" name="nachitos_clasicos" tabindex="6" value="0">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">papas_clasicas</label>
        <input type="number" id="papas_clasicas" class="form-control" name="papas_clasicas" tabindex="7" value="0">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">papas_americanas</label>
        <input type="number" id="papas_americanas" class="form-control" name="papas_americanas" tabindex="8" value="0">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">palito_salado</label>
        <input type="number" id="palito_salado" class="form-control" name="palito_salado" tabindex="9" value="0">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">bastoncito</label>
        <input type="number" id="bastoncito" class="form-control" name="bastoncito" tabindex="10" value="0">
    </div>
    <div class="mb-3">
        <button type="button" onclick="venta()" class="btn btn-primary">Calcular saldo ventas</button>
        <div id="total" style="padding-top: 20px;">
            El total es: $
            <label id="total_venta">0</label>
        </div>
    </div>
        <div class="mb-3">
            <label for="" class="form-label">Saldo</label>
            <input type="number" id="saldo" class="form-control" name="saldo" tabindex="11">
        </div>
        <a href="/ventas" class="btn btn-secondary" tabindex="12">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="13">Guardar</button>
        <!--precios-->
        @foreach ($art1 as $precio)
        <h5 id="conitos_q" style="opacity: 0;display:inline-block;">{{$precio->conitos_queso}}</h5>
        @endforeach
        @foreach ($art2 as $precio)
        <h5 id="conitos_p" style="opacity: 0;display:inline-block;">{{$precio->conitos_pizza}}</h5>
        @endforeach
        @foreach ($art3 as $precio)
        <h5 id="conitos_m" style="opacity: 0;display:inline-block;">{{$precio->conitos_manteca}}</h5>
        @endforeach
        @foreach ($art4 as $precio)
        <h5 id="nachitos" style="opacity: 0;display:inline-block;">{{$precio->nachitos}}</h5>
        @endforeach
        @foreach ($art5 as $precio)
        <h5 id="papas_clasic" style="opacity: 0;display:inline-block;">{{$precio->papas_clasicas}}</h5>
        @endforeach
        @foreach ($art6 as $precio)
        <h5 id="papas_amer" style="opacity: 0;display:inline-block;">{{$precio->papas_americanas}}</h5>
        @endforeach
        @foreach ($art7 as $precio)
        <h5 id="palitos" style="opacity: 0;display:inline-block;">{{$precio->palitos}}</h5>
        @endforeach
        @foreach ($art8 as $precio)
        <h5 id="bastoncitos" style="opacity: 0;display:inline-block;">{{$precio->bastoncitos}}</h5>
        @endforeach
        <script>
            function venta() {
                var conitos_queso, conitos_pizza, conitos_manteca, nachitos_clasicos, papas_clasicas, papas_americanas, palito_salado, bastoncito;
                var art1, art2, art3, art4, art5, art6, art7, art8;
                //cantidad de articulos extraidos del input
                conitos_queso = document.getElementById('conitos_queso').value;
                conitos_pizza = document.getElementById('conitos_pizza').value;
                conitos_manteca = document.getElementById('conitos_manteca').value;
                nachitos_clasicos = document.getElementById('nachitos_clasicos').value;
                papas_clasicas = document.getElementById('papas_clasicas').value;
                papas_americanas = document.getElementById('papas_americanas').value;
                palito_salado = document.getElementById('palito_salado').value;
                bastoncito = document.getElementById('bastoncito').value;
                //precios extraidos de la bd
                art1 = document.getElementById('conitos_q').innerHTML;
                art2 = document.getElementById('conitos_p').innerHTML;
                art3 = document.getElementById('conitos_m').innerHTML;
                art4 = document.getElementById('nachitos').innerHTML;
                art5 = document.getElementById('papas_clasic').innerHTML;
                art6 = document.getElementById('papas_amer').innerHTML;
                art7 = document.getElementById('palitos').innerHTML;
                art8 = document.getElementById('bastoncitos').innerHTML;
                //calcular precios
                precio1 = parseFloat(conitos_queso) * parseFloat(art1);
                precio2 = parseFloat(conitos_pizza) * parseFloat(art2);
                precio3 = parseFloat(conitos_manteca) * parseFloat(art3);
                precio4 = parseFloat(nachitos_clasicos) * parseFloat(art4);
                precio5 = parseFloat(papas_clasicas) * parseFloat(art5);
                precio6 = parseFloat(papas_americanas) * parseFloat(art6);
                precio7 = parseFloat(palito_salado) * parseFloat(art7);
                precio8 = parseFloat(bastoncito) * parseFloat(art8);
                total = precio1 + precio2 + precio3 + precio4 + precio5 + precio6 + precio7 + precio8;
                //mostrar datos
                document.getElementById('total_venta').innerHTML = total;
            }
        </script>
        @stop

        @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
        @stop

        @section('js')
        @stop