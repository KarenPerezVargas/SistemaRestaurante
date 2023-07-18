<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bebida;
use App\Models\Producto;

class CostosController extends Controller
{
    const PAGINATION = 5;
    public function index(Request $request)
    { 
        $buscarpor = $request->get('buscarpor');
        $bebida = Bebida::where('estado','=','1')->where('descripcion','like','%'.$buscarpor.'%')->paginate($this::PAGINATION);
        $producto = Producto::where('estado','=','1')->where('descripcion','like','%'.$buscarpor.'%')->paginate($this::PAGINATION);
        return view('pedidos.admin.costos',compact('bebida','producto','buscarpor'));
    }
}
