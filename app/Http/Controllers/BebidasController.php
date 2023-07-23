<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bebida;

class BebidasController extends Controller
{
    const PAGINATION = 5;
    public function index(Request $request)
    { 
        $buscarpor = $request->get('buscarpor');
        $bebida = Bebida::where('estado','=','1')->where('descripcion','like','%'.$buscarpor.'%')->paginate($this::PAGINATION);
        return view('pedidos.bebidas.bebida.index',compact('bebida','buscarpor'));
    }

    public function create()
    {
        $bebidas=Bebida::all();
        return view('pedidos.bebidas.bebida.create',compact('bebidas'));
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
        $bebida = new Bebida();
        $bebida->descripcion = $request->descripcion;
        $bebida->precio = $request->precio;
        $bebida->cantidad = $request->cantidad;
        $bebida->tipo = $request->tipo;
        $bebida->estado = 1;
        $bebida->save();
        return redirect()->route('pedidos.bebidas.bebida.index')->with('datos', 'Registro Nuevo Guardado');
    }
    
    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        $bebida = Bebida::findOrFail($id);
        return view('pedidos.bebidas.bebida.edit', compact('bebida'));
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
        $bebida = Bebida::find($id);
        $bebida->descripcion = $request->descripcion;
        $bebida->precio = $request->precio;
        $bebida->cantidad = $request->cantidad;
        $bebida->tipo = $request->tipo;
        $bebida->estado = 1;
        $bebida->save();
        return redirect()->route('pedidos.bebidas.bebida.index')->with('datos' . 'Registro Nuevo Actualizado...');
    }


    public function confirmar($id){
        $bebida = Bebida::findOrFail($id);
        return view('pedidos.bebidas.bebida.confirmar',compact('bebida'));
    }

    public function destroy($id)
    {
        $bebida = Bebida::find($id);
        $bebida->estado = 0;
        $bebida->save();
        return redirect()->route('pedidos.bebidas.bebida.index')->with('datos','Registro eliminado');
    }
}
