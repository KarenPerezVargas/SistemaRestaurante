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
        $producto = Producto::all();

        // Devolver las variables
        return view('inventario.personalalmacen.graficos', compact('producto'));
    }
}
