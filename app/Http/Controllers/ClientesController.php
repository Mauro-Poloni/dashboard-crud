<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Clientes::all();
         //clientes que mas compran
        $cliente_venta = "SELECT clientes.cliente AS clientes, ventas.saldo AS saldo FROM clientes JOIN ventas on clientes.id=ventas.id_cliente GROUP by clientes.id ORDER by ventas.saldo DESC limit 10";
        $clientes_ventas = DB::select($cliente_venta);
        return view('cliente.index', compact('clientes','clientes_ventas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientes = new Clientes();
        $clientes->cliente = $request->get('cliente');
        $clientes->ubicacion = $request->get('ubicacion');
        $clientes->lista = $request->get('lista');
        $clientes->save();
        return redirect('/clientes');
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
        $clientes = Clientes::find($id);
        return view('cliente.edit')->with('clientes', $clientes);
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
        $clientes = Clientes::find($id);
        $clientes->cliente = $request->get('cliente');
        $clientes->ubicacion = $request->get('ubicacion');
        $clientes->lista = $request->get('lista');
        $clientes->save();
        return redirect('/clientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clientes = Clientes::find($id);
        $clientes->delete();
        return redirect('/clientes');
    }
}
