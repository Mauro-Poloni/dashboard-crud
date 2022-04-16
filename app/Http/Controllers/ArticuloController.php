<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Usar modelo para tener acceso a los elementos de la tabla
use App\Models\Articulo;
use Illuminate\Support\Facades\DB;
use JeroenNoten\LaravelAdminLte\Components\Form\Select;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulos = Articulo::all();
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

        return view('articulo.index', compact('articulos', 'stocks1', 'stocks2', 'stocks3', 'stocks4', 'stocks5', 'stocks6', 'stocks7', 'stocks8'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articulo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $articulos = new Articulo();
        $articulos->codigo = $request->get('codigo');
        $articulos->descripcion = $request->get('descripcion');
        $articulos->cantidad = $request->get('cantidad');
        $articulos->precio = $request->get('precio');
        $articulos->save();
        return redirect('/articulos');
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
        $articulo = Articulo::find($id);

        return view('articulo.edit')->with('articulo', $articulo);
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
        $articulo = Articulo::find($id);
        $articulo->codigo = $request->get('codigo');
        $articulo->descripcion = $request->get('descripcion');
        $articulo->cantidad = $request->get('cantidad');
        $articulo->precio = $request->get('precio');
        $articulo->save();
        return redirect('/articulos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articulo = Articulo::find($id);
        $articulo->delete();
        return redirect('/articulos');
    }
}
