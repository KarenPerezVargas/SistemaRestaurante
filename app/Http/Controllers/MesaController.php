<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mesa;

class MesaController extends Controller
{
    const PAGINATION = 5;
    public function index(Request $request)
    {
        // Filtra los elementos con estado igual a 1
        $mesa = Mesa::where('eliminado', 1)->get();

        return view('reservas.mesa.mesa', compact('mesa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mesas=Mesa::all();
        return view('reservas.mesa.createMesa', compact('mesas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mesa = new Mesa();
        $mesa->numero = $request->numero;
        $mesa->capacidad = $request->capacidad;
        $mesa->estado = $request->estado;
        $mesa->eliminado = 1;
        $mesa->save();
        return redirect()->route('mesa');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mesa $mesa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,string $id)
    {
        $mesa = Mesa::find($id);
        return view('reservas.mesa.editMesa', compact('mesa', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mesa = Mesa::find($id);
        $mesa->numero = $request->numero;
        $mesa->capacidad = $request->capacidad;
        $mesa->estado = $request->estado;
        $mesa->save();
        return redirect()->route('mesa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $mesa = Mesa::find($id);
        $mesa->eliminado = 0;
        $mesa->save();
        return redirect()->route('mesa');
    }
}
