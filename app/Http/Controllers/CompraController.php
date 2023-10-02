<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $compra = Compra::all();
        return view('inventario.compra.compra', compact('compra'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('inventario.compra.createCompra');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $compra = new Compra();
        $compra->ruc = $request->ruc;
        $compra->fecha = $request->fecha;
        $compra->empresa = $request->empresa;
        $compra->direccion = $request->direccion;
        $compra->email = $request->email;
        $compra->contacto = $request->contacto;
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
    public function edit(Request $request,string $id)
    {
        $compra = Compra::find($id);
        return view('inventario.compra.editCompra', compact('compra', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $compra = Compra::find($id);
        $compra->ruc = $request->ruc;
        $compra->fecha = $request->fecha;
        $compra->empresa = $request->empresa;
        $compra->direccion = $request->direccion;
        $compra->email = $request->email;
        $compra->contacto = $request->contacto;
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
