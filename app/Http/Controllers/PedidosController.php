<?php

namespace App\Http\Controllers;
use App\Models\Pedido;

use Illuminate\Http\Request;

class PedidosController extends Controller
{
    const PAGINATION = 5;
    public function index(Request $request)
    { 
        $buscarpor = $request->get('buscarpor');
        $pedido = Pedido::where('estado','=','1')->where('descripcion','like','%'.$buscarpor.'%')->paginate($this::PAGINATION);
        return view('pedido.index',compact('pedido','buscarpor'));
    }

    public function index2(Request $request)
    { 
        $buscarpor = $request->get('buscarpor');
        $pedido = Pedido::where('estado','=','2')->where('descripcion','like','%'.$buscarpor.'%')->paginate($this::PAGINATION);
        return view('pago.index',compact('pedido','buscarpor'));
    }

    public function create()
    {
        $pedidos=Pedido::all();
        return view('pedido.create',compact('pedidos'));
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
        $pedido = new Pedido();
        $pedido->descripcion = $request->descripcion;
        $pedido->precio = $request->precio;
        $pedido->cantidad = $request->cantidad;
        $pedido->tipo = $request->tipo;
        $pedido->estado = 1;
        $pedido->save();
        return redirect()->route('pedido.index')->with('datos', 'Registro Nuevo Guardado');
    }
    
    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        $pedido = Pedido::findOrFail($id);
        return view('pedido.edit', compact('pedido'));
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
        $pedido = Pedido::find($id);
        $pedido->descripcion = $request->descripcion;
        $pedido->precio = $request->precio;
        $pedido->cantidad = $request->cantidad;
        $pedido->tipo = $request->tipo;
        $pedido->estado = 1;
        $pedido->save();
        return redirect()->route('pedido.index')->with('datos' . 'Registro Nuevo Actualizado...');
    }


    public function confirmar($id){
        $pedido = Pedido::findOrFail($id);
        return view('pedido.confirmar',compact('pedido'));
    }

    public function destroy($id)
    {
        $pedido = Pedido::find($id);
        $pedido->estado = 0;
        $pedido->save();
        return redirect()->route('pedido.index')->with('datos','Registro eliminado');
    }
}
