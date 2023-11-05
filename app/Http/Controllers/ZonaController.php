<?php

namespace App\Http\Controllers;

use App\Models\Zona;
use Illuminate\Http\Request;

class ZonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $zona = Zona::all();

        return view('pedidos.repartidor.zona.zona', compact('zona'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pedidos.repartidor.zona.createZona');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $zona = new Zona();
        $zona->fecha = $request->fecha;
        $zona->provincia = $request->provincia;
        $zona->distrito = $request->distrito;
        $zona->especificaciones = $request->especificaciones;
        $zona->save();
        return redirect()->route('zona');
    }

    /**
     * Display the specified resource.
     */
    public function show(Zona $zona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,string $id)
    {
        $zona = Zona::find($id);
        return view('pedidos.repartidor.zona.editZona', compact('zona', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $zona = Zona::find($id);
        $zona->fecha = $request->fecha;
        $zona->provincia = $request->provincia;
        $zona->distrito = $request->distrito;
        $zona->especificaciones = $request->especificaciones;
        $zona->save();
        return redirect()->route('zona');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $zona = Zona::find($id);
        $zona->delete();
        return redirect()->route('zona');
    }
}
