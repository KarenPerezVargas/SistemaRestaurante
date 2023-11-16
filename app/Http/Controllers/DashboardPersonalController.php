<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Transporte;
use App\Models\Proveedor;

class DashboardPersonalController extends Controller
{
    public function graficos(Request $request)
    {
        $producto = Producto::all( );
        $proveedor = Proveedor::all();
        $transporte = Transporte::all();

        //$capacitacionesPendientes = $capacitacion->where('estadoCapacitacion', 'pendiente')->count();
        //$capacitacionesEnCurso = $capacitacion->where('estadoCapacitacion', 'en curso')->count();
        //$capacitacionesFinalizadas = $capacitacion->where('estadoCapacitacion', 'finalizada')->count();

        return view('personalalmacen.graficos', compact('producto', 'proveedor', 'transporte'));
    }
}
