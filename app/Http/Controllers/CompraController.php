<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use App\Models\Proveedor;
use App\Models\Transporte;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proveedor = Proveedor::all();
        $transporte = Transporte::all();
        $compra = Compra::all();
        return view('inventario.compra.compra', compact('compra', 'proveedor', 'transporte'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $proveedor = Proveedor::all();
        $transporte = Transporte::all();
        return view('inventario.compra.createCompra', compact('proveedor','transporte'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $proveedor = Proveedor::find($request->proveedor_id);
        $transporte = Transporte::find($request->transporte_id);
        $compra = new Compra();
        $compra->ruc = $request->ruc;
        $compra->fecha = $request->fecha;
        $compra->proveedor_id = $proveedor->id;
        $compra->transporte_id = $transporte->id;
        $compra->indicaciones = $request->indicaciones;
        $compra->origen = $request->origen;
        $compra->destino = $request->destino;
        $compra->total = $request->total;
        $compra->save();
        return redirect()->route('compra');
    }

    /**
     * Display the specified resource.
     */
    public function show(Compra $compra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {
        $proveedor = Proveedor::all();
        $transporte = Transporte::all();
        $compra = Compra::find($id);
        return view('inventario.compra.editCompra', compact('compra','proveedor','transporte', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $proveedor = Proveedor::find($request->proveedor_id);
        $transporte = Transporte::find($request->transporte_id);
        $compra = Compra::find($id);
        $compra->ruc = $request->ruc;
        $compra->fecha = $request->fecha;
        $compra->proveedor_id = $request->proveedor_id;
        $compra->transporte_id = $request->transporte_id;
        $compra->indicaciones = $request->indicaciones;
        $compra->origen = $request->origen;
        $compra->destino = $request->destino;
        $compra->total = $request->total;
        $compra->save();
        return redirect()->route('compra');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $compra = Compra::find($id);
        $compra->delete();
        return redirect()->route('compra');
    }
}
