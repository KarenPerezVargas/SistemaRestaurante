<?php

namespace App\Http\Controllers;

use App\Models\HojaCostos;
use Illuminate\Http\Request;

class HojaCostosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hojaCostos = HojaCostos::all();

        return view('inventario.contador.hojaCostos.hojaCostos', compact('hojaCostos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('inventario.contador.hojaCostos.createHojaCostos');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $hojaCostos = new HojaCostos();
        $hojaCostos->fecha = $request->fecha;
        $hojaCostos->nombre_producto = $request->nombre_producto;
        $hojaCostos->unidad_medida = $request->unidad_medida;
        $hojaCostos->cantidad = $request->cantidad;
        $hojaCostos->precio_unit = $request->precio_unit;
        $hojaCostos->precio_total = $hojaCostos->precio_unit*$hojaCostos->cantidad;
        $hojaCostos->mano_obra = $request->mano_obra;
        $hojaCostos->indirectos = $request->indirectos;
        $hojaCostos->margen_beneficio = ((($hojaCostos->precio_total-($hojaCostos->mano_obra+$hojaCostos->indirectos))/$hojaCostos->precio_total)*100);
        $hojaCostos->save();
        return redirect()->route('hojaCostos');
    }

    /**
     * Display the specified resource.
     */
    public function show(HojaCostos $hojaCostos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,string $id)
    {
        $hojaCostos = HojaCostos::find($id);
        return view('inventario.contador.hojaCostos.editHojaCostos', compact('hojaCostos', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $hojaCostos = HojaCostos::find($id);
        $hojaCostos->fecha = $request->fecha;
        $hojaCostos->nombre_producto = $request->nombre_producto;
        $hojaCostos->unidad_medida = $request->unidad_medida;
        $hojaCostos->cantidad = $request->cantidad;
        $hojaCostos->precio_unit = $request->precio_unit;
        $hojaCostos->precio_total = $hojaCostos->precio_unit*$hojaCostos->cantidad;
        $hojaCostos->mano_obra = $request->mano_obra;
        $hojaCostos->indirectos = $request->indirectos;
        $hojaCostos->margen_beneficio = ((($hojaCostos->precio_total-($hojaCostos->mano_obra+$hojaCostos->indirectos))/$hojaCostos->precio_total)*100);
        $hojaCostos->save();
        return redirect()->route('hojaCostos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hojaCostos = HojaCostos::find($id);
        $hojaCostos->delete();
        return redirect()->route('hojaCostos');
    }
}
