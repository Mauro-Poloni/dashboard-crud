<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CajaDiaria;
use App\Models\Venta;
use Illuminate\Support\Facades\DB;

class CajaDiariaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cajas_diarias = CajaDiaria::all();
        $ventas = Venta::all();

        $query1 = "SELECT SUM(saldo) as saldo_total from ventas";
        $query2 = "SELECT  sum(saldo) as saldo,fecha_venta as fecha from ventas group by fecha_venta";
        $saldos = DB::select($query1);
        $ventas = DB::select($query2);

        return view('caja_diaria.index', compact('cajas_diarias', 'saldos', 'ventas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $query1 = "SELECT SUM(saldo) as saldo_total from ventas";
        $query2 = "SELECT  sum(saldo) as saldo,fecha_venta as fecha from ventas group by fecha_venta";
        $saldos = DB::select($query1);
        $ventas = DB::select($query2);

        return view('caja_diaria.create', compact('saldos', 'ventas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cajas_diarias = new CajaDiaria();
        $cajas_diarias->fecha = $request->get('fecha');
        $cajas_diarias->saldo = $request->get('saldo');
        $cajas_diarias->cliente_fiado = $request->get('cliente_fiado');
        $cajas_diarias->cantidad_fiado = $request->get('cantidad_fiado');
        $cajas_diarias->fecha_cancelacio_fiado = $request->get('fecha_cancelacio_fiado');
        $cajas_diarias->saldo_fiado = $request->get('saldo_fiado');
        $cajas_diarias->save();
        return redirect('/cajas_diarias');
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
        $caja_diaria = CajaDiaria::find($id);
        return view('caja_diaria.edit')->with('caja_diaria', $caja_diaria);
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
        $cajas_diarias = CajaDiaria::find($id);
        $cajas_diarias->fecha = $request->get('fecha');
        $cajas_diarias->saldo = $request->get('saldo');
        $cajas_diarias->cliente_fiado = $request->get('cliente_fiado');
        $cajas_diarias->cantidad_fiado = $request->get('cantidad_fiado');
        $cajas_diarias->fecha_cancelacio_fiado = $request->get('fecha_cancelacio_fiado');
        $cajas_diarias->saldo_fiado = $request->get('saldo_fiado');
        $cajas_diarias->save();
        return redirect('/cajas_diarias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $caja_diaria = CajaDiaria::find($id);
        $caja_diaria->delete();
        return redirect('/cajas_diarias');
    }
}
