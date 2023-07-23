<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductosController extends Controller
{
    const PAGINATION = 5;
    public function index(Request $request)
    { 
        $buscarpor = $request->get('buscarpor');
        $producto = Producto::where('estado','=','1')->where('descripcion','like','%'.$buscarpor.'%')->paginate($this::PAGINATION);
        return view('pedidos.productos.producto.index',compact('producto','buscarpor'));
    }

    public function create()
    {
        $productos=Producto::all();
        return view('pedidos.productos.producto.create',compact('productos'));
    }

    public function store(Request $request)
    {
        $data = request()->validate( 
            [
                'descripcion' => 'required|max:100',
                'tipo' => 'required|max:80',
            ],
            [
                'descripcion.required' => 'Ingrese Descripcion',
                'descripcion.max' => 'Maximo 100 caracteres para el Descripcion',
                'tipo.required' => 'Ingrese Tipo',
                'tipo.max' => 'Maximo 80 caracteres para el Tipo',
            ]
        );
        $producto = new Producto();
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->cantidad = $request->cantidad;
        $producto->tipo = $request->tipo;
        $producto->estado = 1;
        $producto->save();
        return redirect()->route('pedidos.productos.producto.index')->with('datos', 'Registro Nuevo Guardado');
    }
    
    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        return view('pedidos.productos.producto.edit', compact('producto'));
    }

    public function update(Request $request, $id)
    {
        $data = request()->validate(
            [
                'descripcion' => 'required|max:100',
                'tipo' => 'required|max:80',
            ],
            [
                'descripcion.required' => 'Ingrese Descripcion',
                'descripcion.max' => 'Maximo 100 caracteres para el Descripcion',
                'tipo.required' => 'Ingrese Tipo',
                'tipo.max' => 'Maximo 80 caracteres para el Tipo',
            ]
        );
        $producto = Producto::find($id);
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->cantidad = $request->cantidad;
        $producto->tipo = $request->tipo;
        $producto->estado = 1;
        $producto->save();
        return redirect()->route('pedidos.productos.producto.index')->with('datos' . 'Registro Nuevo Actualizado...');
    }


    public function confirmar($id){
        $producto = Producto::findOrFail($id);
        return view('pedidos.productos.producto.confirmar',compact('producto'));
    }

    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto->estado = 0;
        $producto->save();
        return redirect()->route('pedidos.productos.producto.index')->with('datos','Registro eliminado');
    }
}
