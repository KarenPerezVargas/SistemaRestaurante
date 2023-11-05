<?php

namespace App\Http\Controllers;

use App\Models\Promocion;
use Illuminate\Http\Request;

class PromocionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $promocion = Promocion::all();

        return view('marketing.coordinadoreventos.promociones.promocion', compact('promocion'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('marketing.coordinadoreventos.promociones.createPromocion');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $promocion = new Promocion();
        $promocion->codigo_promocion = $request->codigo_promocion;
        $promocion->nombre_promocion = $request->nombre_promocion;
        $promocion->descripcion_promocion = $request->descripcion_promocion;
        $promocion->tipo_promocion = $request->tipo_promocion;
        $promocion->fecha_inicio = $request->fecha_inicio;
        $promocion->fecha_fin = $request->fecha_fin;
        $promocion->save();
        return redirect()->route('promocion');
    }

    /**
     * Display the specified resource.
     */
    public function show(Promocion $promocion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {
        $promocion = Promocion::find($id);
        return view('marketing.coordinadoreventos.promociones.editPromocion', compact('promocion', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $promocion = Promocion::find($id);
        $promocion->codigo_promocion = $request->codigo_promocion;
        $promocion->nombre_promocion = $request->nombre_promocion;
        $promocion->descripcion_promocion = $request->descripcion_promocion;
        $promocion->tipo_promocion = $request->tipo_promocion;
        $promocion->fecha_inicio = $request->fecha_inicio;
        $promocion->fecha_fin = $request->fecha_fin;
        $promocion->save();
        return redirect()->route('promocion');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $promocion = Promocion::find($id);
        $promocion->delete();
        return redirect()->route('promocion');
    }
}
