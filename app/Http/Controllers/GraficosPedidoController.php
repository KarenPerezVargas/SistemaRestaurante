<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;

class GraficosPedidoController extends Controller
{
    const PAGINATION = 5;
    public function boletas(Request $request)
    {
        $buscarpor = $request->get('buscarpor');
        $pedido = Pedido::where('estado','=','2')->where('descripcion','like','%'.$buscarpor.'%')->paginate($this::PAGINATION);
        return view('pedidos.personalPedidos.consulta.boletas',compact('pedido','buscarpor'));
    }

    public function graficos(Request $request)
    {
        $buscarpor = $request->get('buscarpor');
        $pedido = Pedido::where('estado','=','1')->where('descripcion','like','%'.$buscarpor.'%')->paginate($this::PAGINATION);
        return view('pedidos.personalPedidos.consulta.graficos',compact('pedido','buscarpor'));
    }

}