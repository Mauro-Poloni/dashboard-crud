<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Models\Clientes;
use App\Models\Venta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VentasController extends Controller
{
    public function index()
    {
        $ventas = Venta::all();
        $clientes = Clientes::all();
        $articulos = Articulo::all();
        $cliente = "SELECT id, cliente from clientes";
        $nombres = DB::select($cliente);
        return view('venta.index', compact('clientes', 'ventas','articulos', 'nombres'));
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $clientes = Clientes::all();
        $conitos_queso = $request->get("conitos_queso");
        //PRECIOS ARTICULOS
        $precio1 = "SELECT precio as conitos_queso from articulos where id=1";
        $precio2 = "SELECT precio as conitos_pizza from articulos where id=2";
        $precio3 = "SELECT precio as conitos_manteca from articulos where id=3";
        $precio4 = "SELECT precio as nachitos from articulos where id=4";
        $precio5 = "SELECT precio as papas_clasicas from articulos where id=5";
        $precio6 = "SELECT precio as papas_americanas from articulos where id=6";
        $precio7 = "SELECT precio as palitos from articulos where id=7";
        $precio8 = "SELECT precio as bastoncitos from articulos where id=8";

        $cant1 = "SELECT id as id1,cantidad as art1 from articulos where id=1";
        $cant2 = "SELECT id as id2,cantidad as art2 from articulos where id=2";
        $cant3 = "SELECT id as id3,cantidad as art3 from articulos where id=3";
        $cant4 = "SELECT id as id4,cantidad as art4 from articulos where id=4";
        $cant5 = "SELECT id as id5,cantidad as art5 from articulos where id=5";
        $cant6 = "SELECT id as id6,cantidad as art6 from articulos where id=6";
        $cant7 = "SELECT id as id7,cantidad as art7 from articulos where id=7";
        $cant8 = "SELECT id as id8,cantidad as art8 from articulos where id=8";


        $query1 = "UPDATE articulos SET cantidad=cantidad-'".$conitos_queso."' WHERE id=1";

        $art1 = DB::select($precio1);
        $art2 = DB::select($precio2);
        $art3 = DB::select($precio3);
        $art4 = DB::select($precio4);
        $art5 = DB::select($precio5);
        $art6 = DB::select($precio6);
        $art7 = DB::select($precio7);
        $art8 = DB::select($precio8);

        $stock1 = DB::select($query1);

        $can1 = DB::select($cant1);
        $can2 = DB::select($cant2);
        $can3 = DB::select($cant3);
        $can4 = DB::select($cant4);
        $can5 = DB::select($cant5);
        $can6 = DB::select($cant6);
        $can7 = DB::select($cant7);
        $can8 = DB::select($cant8);
        
        return view('venta.create', compact('clientes', 'art1', 'art2', 'art3', 'art4', 'art5', 'art6', 'art7', 'art8','stock1','can1','can2','can3','can4','can5','can6','can7','can8'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $venta = new Venta();
        $venta->id_cliente = $request->get('id_cliente');
        $venta->fecha_venta = $request->get('fecha_venta');
        $venta->conitos_queso = $request->get('conitos_queso');
        $venta->conitos_pizza = $request->get('conitos_pizza');
        $venta->conitos_manteca = $request->get('conitos_manteca');
        $venta->nachitos_clasicos = $request->get('nachitos_clasicos');
        $venta->papas_clasicas = $request->get('papas_clasicas');
        $venta->papas_americanas = $request->get('papas_americanas');
        $venta->palito_salado = $request->get('palito_salado');
        $venta->chizito = $request->get('chizito');
        $venta->bastoncito = $request->get('bastoncito');
        $venta->pizzitos = $request->get('pizzitos');
        $venta->tutuca = $request->get('tutuca');
        $venta->mix_desayuno = $request->get('mix_desayuno');
        $venta->mix_patagonico = $request->get('mix_patagonico');
        $venta->pochoclo = $request->get('pochoclo');
        $venta->saldo = $request->get('saldo');
        $venta->save();
        return redirect('/ventas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $venta = Venta::find($id);
        return view('venta.edit')->with('venta', $venta);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $venta = Venta::find($id);
        $venta->id_cliente = $request->get('id_cliente');
        $venta->fecha_venta = $request->get('fecha_venta');
        $venta->conitos_queso = $request->get('conitos_queso');
        $venta->conitos_pizza = $request->get('conitos_pizza');
        $venta->conitos_manteca = $request->get('conitos_manteca');
        $venta->nachitos_clasicos = $request->get('nachitos_clasicos');
        $venta->papas_clasicas = $request->get('papas_clasicas');
        $venta->papas_americanas = $request->get('papas_americanas');
        $venta->palito_salado = $request->get('palito_salado');
        $venta->chizito = $request->get('chizito');
        $venta->bastoncito = $request->get('bastoncito');
        $venta->pizzitos = $request->get('pizzitos');
        $venta->tutuca = $request->get('tutuca');
        $venta->mix_desayuno = $request->get('mix_desayuno');
        $venta->mix_patagonico = $request->get('mix_patagonico');
        $venta->pochoclo = $request->get('pochoclo');
        $venta->saldo = $request->get('saldo');
        $venta->save();
        return redirect('/ventas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $venta = Venta::find($id);
        $venta->delete();
        return redirect('/ventas');
    }
}
