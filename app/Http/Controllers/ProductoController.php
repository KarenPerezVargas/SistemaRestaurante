<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use PDF;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $producto = Producto::all();
        return view('inventario.productos.producto', compact('producto'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('inventario.productos.createProducto');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $producto = new Producto();
        $producto->producto_codigo = $request->producto_codigo;
        $producto->producto_categoria = $request->producto_categoria;
        $producto->producto_nombre = $request->producto_nombre;
        $producto->save();
        return redirect()->route('producto');
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {
        $producto = Producto::find($id);
        return view('inventario.productos.editProducto', compact('producto', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $producto = Producto::find($id);
        $producto->producto_codigo = $request->producto_codigo;
        $producto->producto_categoria = $request->producto_categoria;
        $producto->producto_nombre = $request->producto_nombre;
        $producto->save();
        return redirect()->route('producto');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $producto = Producto::find($id);
        $producto->delete();
        return redirect()->route('producto');
    }

    public function pdf1()
    {
        $producto = Producto::all();

        // Generamos el PDF
        $pdf = PDF::loadView('inventario.productos.reporte', compact('producto'));

        // Abrimos el PDF en una nueva pestaña
        return $pdf->stream('Reporte de productos.pdf', ['target' => '_blank']);

        // return $pdf->stream();

    }
}
