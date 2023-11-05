<?php

namespace App\Http\Controllers;

use App\Models\HojaPresupuesto;
use Illuminate\Http\Request;

class HojaPresupuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hojaPresupuesto = HojaPresupuesto::all();

        return view('inventario.contador.presupuesto.hojaPresupuesto', compact('hojaPresupuesto'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('inventario.contador.presupuesto.createHojaPresupuesto');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $hojaPresupuesto = new HojaPresupuesto();
        $hojaPresupuesto->codigo = $request->codigo;
        $hojaPresupuesto->fecha = $request->fecha;
        $hojaPresupuesto->tiempo_validez = $request->tiempo_validez;
        $hojaPresupuesto->descripcion = $request->descripcion;
        $hojaPresupuesto->precio = $request->precio;
        $hojaPresupuesto->igv = $request->igv;
        $hojaPresupuesto->presupuesto_total = $hojaPresupuesto->precio * (1 + $hojaPresupuesto->igv/100);
        $hojaPresupuesto->save();
        return redirect()->route('hojaPresupuesto');
    }

    /**
     * Display the specified resource.
     */
    public function show(HojaPresupuesto $hojaPresupuesto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,string $id)
    {
        $hojaPresupuesto = HojaPresupuesto::find($id);
        return view('inventario.contador.presupuesto.editHojaPresupuesto', compact('hojaPresupuesto', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $hojaPresupuesto = HojaPresupuesto::find($id);
        $hojaPresupuesto->codigo = $request->codigo;
        $hojaPresupuesto->fecha = $request->fecha;
        $hojaPresupuesto->tiempo_validez = $request->tiempo_validez;
        $hojaPresupuesto->descripcion = $request->descripcion;
        $hojaPresupuesto->precio = $request->precio;
        $hojaPresupuesto->igv = $request->igv;
        $hojaPresupuesto->presupuesto_total = $hojaPresupuesto->precio * (1 + $hojaPresupuesto->igv/100);
        $hojaPresupuesto->save();
        return redirect()->route('hojaPresupuesto');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hojaPresupuesto = HojaPresupuesto::find($id);
        $hojaPresupuesto->delete();
        return redirect()->route('hojaPresupuesto');
    }
}
