<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Mesa;
use App\Models\Reserva;
use Illuminate\Support\Facades\Date;

class ReservaController extends Controller
{
    public function index(Request $request)
    {
        // Filtra los elementos con estado igual a 1
        $reservas = Reserva::where('eliminado', 1)->get();
        $clientes = Cliente::all();
        $mesas = Mesa::all();
        return view('reservas.reserva.reserva', compact('reservas','clientes','mesas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $reservas=Reserva::all();
        $clientes = Cliente::all();
        $mesas = Mesa::all();
        return view('reservas.reserva.createReserva', compact('reservas','clientes','mesas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $reserva = new Reserva();
        $reserva->fecha_reserva = Date::now();
        $reserva->fecha_comida = $request->fecha_comida;
        $reserva->num_comensales = $request->num_comensales;
        $reserva->cliente_id = $request->cliente_id;
        $reserva->mesa_id = $request->mesa_id;
        $reserva->precio = $request->precio;
        $reserva->estado = 'Pendiente';
        $reserva->observaciones = $request->observaciones;
        $reserva->eliminado = 1;
        $reserva->save();
        return redirect()->route('reserva');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reserva $reserva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,string $id)
    {
        $reserva = Reserva::find($id);
        $clientes = Cliente::all();
        $mesas = Mesa::all();
        return view('reservas.reserva.editReserva', compact('reserva', 'id', 'clientes','mesas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $reserva = Reserva::find($id);
        $reserva->fecha_comida = $request->fecha_comida;
        $reserva->num_comensales = $request->num_comensales;
        $reserva->cliente_id = $request->cliente_id;
        $reserva->mesa_id = $request->mesa_id;
        $reserva->precio = $request->precio;
        $reserva->estado = $request->estado;
        $reserva->observaciones = $request->observaciones;
        $reserva->save();
        return redirect()->route('reserva');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $reserva = Reserva::find($id);
        $reserva->eliminado = 0;
        $reserva->save();
        return redirect()->route('reserva');
    }
}
