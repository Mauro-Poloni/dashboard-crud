@extends('adminlte::page')

@section('title', 'CRUD con Dashboard')

@section('content_header')
<h1>Distribuidora</h1>
@stop

@section('content')
<!--GRAFICOS-->

<div id="chart1" style="display: inline-block;padding:20px;margin:50px"></div>
<div id="chart2" style="display: inline-block;padding:20px;margin:50px"></div>
<div id="chart3" style="display: inline-block;padding:20px;margin:50px"></div>
<div id="chart4" style="display: inline-block;padding:20px;margin:50px"></div>
  <!--GRAFICO 1-->

  @foreach ($saldos1 as $saldo1)
  <h3 id="saldo_max" style="opacity: 0;display:inline-block;">{{$saldo1->saldo_max}}</h3>
  @endforeach
  @foreach ($saldos2 as $saldo2)
  <h3 id="saldo_min" style="opacity: 0;display:inline-block;">{{$saldo2->saldo_min}}</h3>
  @endforeach

  <!--GRAFICO 2-->

  @foreach ($clientes_cantidad1 as $cantidad)
  <h3 id="cantidad1" style="opacity: 0;display:inline-block;">{{$cantidad->cantidad}}</h3>
  @endforeach
  @foreach ($clientes_cantidad2 as $cantidad)
  <h3 id="cantidad2" style="opacity: 0;display:inline-block;">{{$cantidad->cantidad}}</h3>
  @endforeach
  @foreach ($clientes_cantidad3 as $cantidad)
  <h3 id="cantidad3" style="opacity: 0;display:inline-block;">{{$cantidad->cantidad}}</h3>
  @endforeach

  <!--GRAFICO 3-->

  @foreach ($ventas_hoy as $importe_hoy)
  <h3 id="importe_hoy" style="opacity: 0;display:inline-block;">{{$importe_hoy->importe_hoy}}</h3>
  @endforeach
  @foreach ($ventas_ayer as $importe_ayer)
  <h3 id="importe_ayer" style="opacity: 0;display:inline-block;">{{$importe_ayer->importe_ayer}}</h3>
  @endforeach

  <!--GRAFICO 4-->

  @foreach ($venta1 as $venta)
  <h3 id="conitos_queso" style="opacity: 0;display:inline-block;">{{$venta->venta}}</h3>
  @endforeach
  @foreach ($venta2 as $venta)
  <h3 id="conitos_pizza" style="opacity: 0;display:inline-block;">{{$venta->venta}}</h3>
  @endforeach
  @foreach ($venta3 as $venta)
  <h3 id="conitos_manteca" style="opacity: 0;display:inline-block;">{{$venta->venta}}</h3>
  @endforeach
  @foreach ($venta4 as $venta)
  <h3 id="nachitos_clasicos" style="opacity: 0;display:inline-block;">{{$venta->venta}}</h3>
  @endforeach
  @foreach ($venta5 as $venta)
  <h3 id="papas_clasicas" style="opacity: 0;display:inline-block;">{{$venta->venta}}</h3>
  @endforeach
  @foreach ($venta6 as $venta)
  <h3 id="papas_americanas" style="opacity: 0;display:inline-block;">{{$venta->venta}}</h3>
  @endforeach
  @foreach ($venta7 as $venta)
  <h3 id="palitos" style="opacity: 0;display:inline-block;">{{$venta->venta}}</h3>
  @endforeach
  @foreach ($venta8 as $venta)
  <h3 id="bastoncitos" style="opacity: 0;display:inline-block;">{{$venta->venta}}</h3>
  @endforeach




@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<!--Cantidad de ventas por articulo-->
<script>
  //Valor en formato string
  var conitos_queso = document.querySelector("#conitos_queso").innerHTML;
  var conitos_pizza = document.querySelector("#conitos_pizza").innerHTML;
  var conitos_manteca = document.querySelector("#conitos_manteca").innerHTML;
  var nachitos_clasicos = document.querySelector("#nachitos_clasicos").innerHTML;
  var papas_clasicas = document.querySelector("#papas_clasicas").innerHTML;
  var papas_americanas = document.querySelector("#papas_americanas").innerHTML;
  var palitos = document.querySelector("#palitos").innerHTML;
  var bastoncitos = document.querySelector("#bastoncitos").innerHTML;
  //valor en formato number
  var conitos_queso_numero = parseFloat(conitos_queso);
  var conitos_pizza_numero = parseFloat(conitos_pizza);
  var conitos_manteca_numero = parseFloat(conitos_manteca);
  var nachitos_clasicos_numero = parseFloat(nachitos_clasicos);
  var papas_clasicas_numero = parseFloat(papas_clasicas);
  var papas_americanas_numero = parseFloat(papas_americanas);
  var palitos_numero = parseFloat(palitos);
  var bastoncitos_numero = parseFloat(bastoncitos);

  var options = {
          series: [{
          data: [conitos_queso_numero,conitos_pizza_numero,conitos_manteca_numero,nachitos_clasicos_numero,papas_clasicas_numero,papas_americanas_numero,palitos_numero,bastoncitos_numero]
        }],
          chart: {
          type: 'bar',
          height: 350
        },
        plotOptions: {
          bar: {
            borderRadius: 4,
            horizontal: true,
          }
        },
        dataLabels: {
          enabled: false
        },
        xaxis: {
          categories: ['Conitos Queso','Conitos Pizza','Conitos Manteca','Nachitos Clasicos','Papas Clasicos','Papas Americanas','Palitos Salados','bastoncitos'
          ],
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart1"), options);
        chart.render();
</script>

<!--GRAFICO VENTA MAX Y MIN-->

<script>
  var saldo_max = document.querySelector("#saldo_max").innerHTML;
  var saldo_max_numero = parseFloat(saldo_max)
  var saldo_min = document.querySelector("#saldo_min").innerHTML;
  var saldo_min_numero = parseFloat(saldo_min)

  var options = {
    series: [saldo_max_numero, saldo_min_numero],
    chart: {
      width: 390,
      type: 'pie',
    },
    labels: ['Saldo Max', 'Saldo Min'],
    responsive: [{
      breakpoint: 480,
      options: {
        chart: {
          width: 200
        },
        legend: {
          position: 'bottom'
        }
      }
    }]
  };

  var chart = new ApexCharts(document.querySelector("#chart2"), options);
  chart.render();
</script>

<!--GRAFICO CANTIDAD DE CLIENTES-->

<script>
  var cantidad1 = document.querySelector("#cantidad1").innerHTML;
  var cantidad2 = document.querySelector("#cantidad2").innerHTML;
  var cantidad3 = document.querySelector("#cantidad3").innerHTML;
  var cantidad_numero1 = parseFloat(cantidad1);
  var cantidad_numero2 = parseFloat(cantidad2);
  var cantidad_numero3 = parseFloat(cantidad3);

  var options = {
    series: [cantidad_numero1, cantidad_numero2, cantidad_numero3],
    chart: {
      width: 390,
      type: 'pie',
    },
    labels: ['Clientes Junin', 'Clientes Rivadavia', 'Clientes San Martin'],
    responsive: [{
      breakpoint: 480,
      options: {
        chart: {
          width: 200
        },
        legend: {
          position: 'bottom'
        }
      }
    }]
  };

  var chart = new ApexCharts(document.querySelector("#chart3"), options);
  chart.render();
</script>

<!--GRAFICO VENTAS AYER VS HOY-->

<script>
  var importe_hoy = document.querySelector("#importe_hoy").innerHTML;
  var importe_ayer = document.querySelector("#importe_ayer").innerHTML;
  var importe_hoy_numero = parseFloat(importe_hoy);
  var importe_ayer_numero = parseFloat(importe_ayer);

  var options = {
          series: [{
          data: [importe_hoy_numero,importe_ayer_numero]
        }],
          chart: {
          type: 'bar',
          height: 350
        },
        plotOptions: {
          bar: {
            borderRadius: 4,
            horizontal: true,
          }
        },
        dataLabels: {
          enabled: false
        },
        xaxis: {
          categories: ['Importe hoy','Importe ayer'
          ],
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart4"), options);
        chart.render();
</script>
@stop