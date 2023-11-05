<?php

namespace App\Http\Controllers;

use App\Models\Mesa;
use Illuminate\Http\Request;

class MesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mesa = Mesa::all();
        return view('reservas.mesa.mesa', compact('mesa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reservas.mesa.createMesa');
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
    public function destroy(string $id)
    {
        $mesa = Mesa::find($id);
        $mesa->delete();
        return redirect()->route('mesa');
    }
}
