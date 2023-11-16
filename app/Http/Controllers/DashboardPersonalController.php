<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class DashboardPersonalController extends Controller
{
    public function graficos(Request $request)
    {
        $producto = Producto::all();
        $capacitacion = Capacitacion::all();
        $empleadoCapacitacion = EmpleadoCapacitacion::all();

        $capacitacionesPendientes = $capacitacion->where('estadoCapacitacion', 'pendiente')->count();
        $capacitacionesEnCurso = $capacitacion->where('estadoCapacitacion', 'en curso')->count();
        $capacitacionesFinalizadas = $capacitacion->where('estadoCapacitacion', 'finalizada')->count();

        return view('personalalmacen.graficos', compact('empleado', 'capacitacion', 'empleadoCapacitacion', 'capacitacionesPendientes', 'capacitacionesEnCurso', 'capacitacionesFinalizadas'));
    }
}
