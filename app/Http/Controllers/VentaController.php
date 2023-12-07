<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;
use App\Models\VentaProducto;

class VentaController extends Controller
{
    public function index(Request $request)
    {
        // Filtra los elementos con estado igual a 1
        // $reservas = Reserva::where('eliminado', 1)->get();
        $ventas = Venta::all();
        return view('venta.venta', compact('ventas'));
    }
}
