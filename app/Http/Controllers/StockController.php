<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Models\Venta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDO;

class StockController extends Controller
{
    public function index()
    {
        $ventas = Venta::all();
        $articulos = Articulo::all();

        //NOMBRE DE LOS ARTICULOS

        $art1 = "SELECT descripcion from articulos where id=1";
        $art2 = "SELECT descripcion from articulos where id=2";
        $art3 = "SELECT descripcion from articulos where id=3";
        $art4 = "SELECT descripcion from articulos where id=4";
        $art5 = "SELECT descripcion from articulos where id=5";
        $art6 = "SELECT descripcion from articulos where id=6";
        $art7 = "SELECT descripcion from articulos where id=7";
        $art8 = "SELECT descripcion from articulos where id=8";

        $nom1 = DB::select($art1);
        $nom2 = DB::select($art2);
        $nom3 = DB::select($art3);
        $nom4 = DB::select($art4);
        $nom5 = DB::select($art5);
        $nom6 = DB::select($art6);
        $nom7 = DB::select($art7);
        $nom8 = DB::select($art8);

        //CANTIDAD DISPONIBLE DE CADA ARTICULO

        $cant1 = "SELECT cantidad from articulos where id=1";
        $cant2 = "SELECT cantidad from articulos where id=2";
        $cant3 = "SELECT cantidad from articulos where id=3";
        $cant4 = "SELECT cantidad from articulos where id=4";
        $cant5 = "SELECT cantidad from articulos where id=5";
        $cant6 = "SELECT cantidad from articulos where id=6";
        $cant7 = "SELECT cantidad from articulos where id=7";
        $cant8 = "SELECT cantidad from articulos where id=8";

        $cantidad1 = DB::select($cant1);
        $cantidad2 = DB::select($cant2);
        $cantidad3 = DB::select($cant3);
        $cantidad4 = DB::select($cant4);
        $cantidad5 = DB::select($cant5);
        $cantidad6 = DB::select($cant6);
        $cantidad7 = DB::select($cant7);
        $cantidad8 = DB::select($cant8);

        //VENTAS DE CADA ARTICULO

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

        //STOCK DISPONIBLE DE CADA ARTICULO

        $query1 = "SELECT articulos.descripcion, articulos.cantidad - sum(ventas.conitos_queso) as stock from articulos,ventas where articulos.id = 1";
        $query2 = "SELECT articulos.descripcion, articulos.cantidad - sum(ventas.conitos_pizza) as stock from articulos,ventas where articulos.id = 2";
        $query3 = "SELECT articulos.descripcion, articulos.cantidad - sum(ventas.conitos_manteca) as stock from articulos,ventas where articulos.id = 3";
        $query4 = "SELECT articulos.descripcion, articulos.cantidad - sum(ventas.nachitos_clasicos) as stock from articulos,ventas where articulos.id = 4";
        $query5 = "SELECT articulos.descripcion, articulos.cantidad - sum(ventas.papas_clasicas) as stock from articulos,ventas where articulos.id = 5";
        $query6 = "SELECT articulos.descripcion, articulos.cantidad - sum(ventas.papas_americanas) as stock from articulos,ventas where articulos.id = 6";
        $query7 = "SELECT articulos.descripcion, articulos.cantidad - sum(ventas.palito_salado) as stock from articulos,ventas where articulos.id = 7";
        $query8 = "SELECT articulos.descripcion, articulos.cantidad - sum(ventas.bastoncito) as stock from articulos,ventas where articulos.id = 8";

        $stocks1 = DB::select($query1);
        $stocks2 = DB::select($query2);
        $stocks3 = DB::select($query3);
        $stocks4 = DB::select($query4);
        $stocks5 = DB::select($query5);
        $stocks6 = DB::select($query6);
        $stocks7 = DB::select($query7);
        $stocks8 = DB::select($query8);

        return view('stock.index', compact(
            'ventas',
            'articulos',
            'nom1',
            'nom2',
            'nom3',
            'nom4',
            'nom5',
            'nom6',
            'nom7',
            'nom8',
            'cantidad1',
            'cantidad2',
            'cantidad3',
            'cantidad4',
            'cantidad5',
            'cantidad6',
            'cantidad7',
            'cantidad8',
            'venta1',
            'venta2',
            'venta3',
            'venta4',
            'venta5',
            'venta6',
            'venta7',
            'venta8',
            'stocks1',
            'stocks2',
            'stocks3',
            'stocks4',
            'stocks5',
            'stocks6',
            'stocks7',
            'stocks8'
        ));
    }
}
