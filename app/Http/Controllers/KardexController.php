<?php

namespace App\Http\Controllers;

use App\Models\Kardex;
use Illuminate\Http\Request;

class KardexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kardex = Kardex::all();
        return view('inventario.kardex.kardex', compact('kardex'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('inventario.kardex.createKardex');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kardex = new Kardex();
        $kardex->kardex_cantidad = $request->kardex_cantidad;
        $kardex->kardex_fecha = $request->kardex_fecha;
        $kardex->kardex_producto = $request->kardex_producto;
        $kardex->kardex_precio = $request->kardex_precio;
        $kardex->kardex_movimiento = $request->kardex_movimiento;
        $kardex->kardex_total = $kardex->kardex_cantidad*$kardex->kardex_precio;
        $kardex->save();
        return redirect()->route('kardex');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kardex $kardex)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,string $id)
    {
        $kardex = Kardex::find($id);
        return view('inventario.kardex.editKardex', compact('kardex', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kardex = Kardex::find($id);
        $kardex->kardex_cantidad = $request->kardex_cantidad;
        $kardex->kardex_fecha = $request->kardex_fecha;
        $kardex->kardex_producto = $request->kardex_producto;
        $kardex->kardex_precio = $request->kardex_precio;
        $kardex->kardex_movimiento = $request->kardex_movimiento;
        $kardex->kardex_total = $kardex->kardex_cantidad*$kardex->kardex_precio;
        $kardex->save();
        return redirect()->route('kardex');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kardex = Kardex::find($id);
        $kardex->delete();
        return redirect()->route('kardex');
    }
}
