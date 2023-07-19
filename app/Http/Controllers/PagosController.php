<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;

class PagosController extends Controller
{
    const PAGINATION = 5;
    public function index(Request $request)
    { 
        $buscarpor = $request->get('buscarpor');
        $pedido = Pedido::where('estado','=','1')->where('descripcion','like','%'.$buscarpor.'%')->paginate($this::PAGINATION);
        return view('pago.index',compact('pedido','buscarpor'));
    }

    public function pagos(Request $request)
    { 
        $buscarpor = $request->get('buscarpor');
        $pedido = Pedido::where('estado','=','2')->where('descripcion','like','%'.$buscarpor.'%')->paginate($this::PAGINATION);
        return view('pago.pagos',compact('pedido','buscarpor'));
    }
    
    public function show($id)
    {
        //
    }

    public function confirmar($id){
        $pedido = Pedido::findOrFail($id);
        return view('pago.confirmar',compact('pedido'));
    }

    public function destroy($id)
    {
        $pedido = Pedido::find($id);
        $pedido->estado = 2;
        $pedido->save();
        return redirect()->route('pago.index')->with('datos','Registro eliminado');
    }

    public function anular($id){
        $pedido = Pedido::find($id);
        $pedido->estado = 1;
        $pedido->save();
        return redirect()->route('pago.pagos')->with('datos','Registro anulado');
    }
}
