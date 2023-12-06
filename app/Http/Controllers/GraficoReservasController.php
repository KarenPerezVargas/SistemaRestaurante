<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
use App\Models\Cliente;
use App\Models\Mesa;
use App\Models\PagoReserva;
use Illuminate\Support\Facades\DB;

class GraficoReservasController extends Controller
{
    public function graficos()
    {
        // GRAFICO 1
        $reservasPorCliente = Reserva::join('clientes', 'reservas.cliente_id', '=', 'clientes.idCliente')
        ->groupBy('clientes.nombres', 'clientes.apellidos')
        ->select(DB::raw("CONCAT(clientes.nombres, ' ', clientes.apellidos) as cliente"), DB::raw('count(*) as total'))
        ->get();

        // GRAFICO 2
        $now = now(); // Obten la fecha actual
        $lastYear = $now->subYear(); // Resta un año a la fecha actual

        $reservasPorMes = Reserva::where('fecha_reserva', '>=', $lastYear)
        ->groupBy(DB::raw('MONTH(fecha_reserva)'))
        ->selectRaw('MONTH(fecha_reserva) as month, count(*) as total')
        ->get();

        // DATOS DE BD
        $totalClientes = Cliente::count();
        $totalMesas = Mesa::count();
        $totalReservas = Reserva::count();
        $totalPagoReservas = PagoReserva::count();

        return view('reservas.grafico.menu', compact('reservasPorMes', 'reservasPorCliente', 'totalClientes', 'totalMesas', 'totalReservas', 'totalPagoReservas'));
    }


    // No estan en uso
    public function grafico1()
    {
        $reservasPorCliente = Reserva::join('clientes', 'reservas.cliente_id', '=', 'clientes.idCliente')
        ->groupBy('clientes.nombres', 'clientes.apellidos')
        ->select(DB::raw("CONCAT(clientes.nombres, ' ', clientes.apellidos) as cliente"), DB::raw('count(*) as total'))
        ->get();

        return view('reservas.grafico.grafico1', compact('reservasPorCliente'));
    }

    public function grafico2()
    {
        $now = now(); // Obten la fecha actual
        $lastYear = $now->subYear(); // Resta un año a la fecha actual

        $reservasPorMes = Reserva::where('fecha_reserva', '>=', $lastYear)
            ->groupBy(DB::raw('MONTH(fecha_reserva)'))
            ->selectRaw('MONTH(fecha_reserva) as month, count(*) as total')
            ->get();

        return view('reservas.grafico.grafico2', compact('reservasPorMes'));
    }

}
