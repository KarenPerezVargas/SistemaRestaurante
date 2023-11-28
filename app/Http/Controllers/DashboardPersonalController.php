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

        // Obtener las categorias de los productos
        $categorias = $producto->pluck('producto_categoria')->unique();
        
        // Contar la cantidad de productos por cada categoria
        $cantidades = $categorias->map(function ($categoria) use ($producto) {
            return $producto->where('producto_categoria', $categoria)->count();
        });

        // Devolver las variables
        return view('inventario.personalalmacen.graficos', compact('producto', 'cantidades', 'categorias'));
    }
}

/*
        $producto = Producto::all();

        // Devolver las variables
        return view('inventario.personalalmacen.graficos', compact('producto'));
        */