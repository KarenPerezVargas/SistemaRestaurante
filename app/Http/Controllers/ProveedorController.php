<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proveedor = Proveedor::all();
        return view('inventario.proveedor.proveedor', compact('proveedor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('inventario.proveedor.createProveedor');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $proveedor = new Proveedor();
        $proveedor->codigo_proveedor = $request->codigo_proveedor;
        $proveedor->nombre_proveedor = $request->nombre_proveedor;
        $proveedor->ciudad_proveedor = $request->ciudad_proveedor;
        $proveedor->direccion_proveedor = $request->direccion_proveedor;
        $proveedor->email_proveedor = $request->email_proveedor;
        $proveedor->telefono_proveedor = $request->telefono_proveedor;
        $proveedor->save();
        return redirect()->route('proveedor');
    }

    /**
     * Display the specified resource.
     */
    public function show(Proveedor $proveedor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {
        $proveedor = Proveedor::find($id);
        return view('inventario.proveedor.editProveedor', compact('proveedor', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $proveedor = Proveedor::find($id);
        $proveedor->codigo_proveedor = $request->codigo_proveedor;
        $proveedor->nombre_proveedor = $request->nombre_proveedor;
        $proveedor->ciudad_proveedor = $request->ciudad_proveedor;
        $proveedor->direccion_proveedor = $request->direccion_proveedor;
        $proveedor->email_proveedor = $request->email_proveedor;
        $proveedor->telefono_proveedor = $request->telefono_proveedor;
        $proveedor->save();
        return redirect()->route('proveedor');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $proveedor = Proveedor::find($id);
        $proveedor->delete();
        return redirect()->route('proveedor');
    }
}
