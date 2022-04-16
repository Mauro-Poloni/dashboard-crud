<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use App\Models\Venta;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $ventas = Venta::all();
        $clientes = Clientes::all();
        //Consulta venta mas barata y la mas cara
        $query1 = "SELECT max(saldo) as saldo_max from ventas";
        $query2 = "SELECT min(saldo) as saldo_min from ventas";
        //Consulta cantidad de clientes por ciudad
        $query3 = "SELECT COUNT(ID) AS cantidad FROM clientes where ubicacion ='JUNIN' or ubicacion ='junin' or ubicacion ='Junin'";
        $query6 = "SELECT COUNT(ID) AS cantidad FROM clientes where ubicacion ='RIVADAVIA' or ubicacion ='rivadavia' or ubicacion ='Rivadavia'";
        $query7 = "SELECT COUNT(ID) AS cantidad FROM clientes where ubicacion ='SAN MARTIN' or ubicacion ='san martin' or ubicacion ='San Martin'";
        //Consulta ventas del dia de hoy y la del dia anterior
        $query4 = "SELECT SUM(saldo) as importe_hoy from ventas where fecha_venta = CURRENT_DATE";
        $query5 = "SELECT SUM(saldo) as importe_ayer from ventas where fecha_venta = CURRENT_DATE - interval 1 day";
        //Cantidad de articulos vendidos 
        $ventas1 = "SELECT sum(conitos_queso) as venta from ventas";
        $ventas2 = "SELECT sum(conitos_pizza) as venta from ventas";
        $ventas3 = "SELECT sum(conitos_manteca) as venta from ventas";
        $ventas4 = "SELECT sum(nachitos_clasicos) as venta from ventas";
        $ventas5 = "SELECT sum(papas_clasicas) as venta from ventas";
        $ventas6 = "SELECT sum(papas_americanas) as venta from ventas";
        $ventas7 = "SELECT sum(palito_salado) as venta from ventas";
        $ventas8 = "SELECT sum(bastoncito) as venta from ventas";

        $venta1 = DB::select($ventas1);
        $venta2 = DB::select($ventas2);
        $venta3 = DB::select($ventas3);
        $venta4 = DB::select($ventas4);
        $venta5 = DB::select($ventas5);
        $venta6 = DB::select($ventas6);
        $venta7 = DB::select($ventas7);
        $venta8 = DB::select($ventas8);

        $saldos1 = DB::select($query1);
        $saldos2 = DB::select($query2);
        $clientes_cantidad1 = DB::select($query3);
        $clientes_cantidad2 = DB::select($query6);
        $clientes_cantidad3 = DB::select($query7);
        $ventas_hoy = DB::select($query4);
        $ventas_ayer = DB::select($query5);

        return view('home.index', compact('ventas', 'saldos1', 'saldos2', 'clientes_cantidad1', 'clientes_cantidad2', 'clientes_cantidad3', 'ventas_hoy', 'ventas_ayer', 'venta1', 'venta2', 'venta3', 'venta4', 'venta5', 'venta6', 'venta7', 'venta8','clientes'));
    }
}
