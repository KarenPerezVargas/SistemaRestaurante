<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;
use PDF;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Productos::all();
        return view('pedidos.personalPedidos.productos.productos', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pedidos.personalPedidos.productos.createProductos');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $productos = new Productos();
        $productos->producto_codigo = $request->producto_codigo;
        $productos->producto_categoria = $request->producto_categoria;
        $productos->producto_nombre = $request->producto_nombre;
        $productos->producto_precio = $request->producto_precio;
        $productos->producto_foto = $request->producto_foto;
        $productos->descripcion = $request->descripcion;
        $productos->cantidad = $request->cantidad;
        $productos->save();
        return redirect()->route('productos');
    }

    /**
     * Display the specified resource.
     */
    public function show(Productos $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {
        $productos = Productos::find($id);
        return view('pedidos.personalPedidos.productos.editProductos', compact('productos', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $productos = Productos::find($id);
        $productos->producto_codigo = $request->producto_codigo;
        $productos->producto_categoria = $request->producto_categoria;
        $productos->producto_nombre = $request->producto_nombre;
        $productos->producto_precio = $request->producto_precio;
        $productos->producto_foto = $request->producto_foto;
        $productos->descripcion = $request->descripcion;
        $productos->cantidad = $request->cantidad;
        $productos->save();
        return redirect()->route('productos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $productos = Productos::find($id);
        $productos->delete();
        return redirect()->route('productos');
    }

    public function pdf1()
    {
        $productos = Productos::all();

        // Generamos el PDF
        $pdf = PDF::loadView('pedidos.personalPedidos.productos.reporte', compact('productos'));

        // Abrimos el PDF en una nueva pestaña
        return $pdf->stream('Reporte de productos.pdf', ['target' => '_blank']);

        // return $pdf->stream();

    }
}
