<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;

class ReservaController extends Controller
{
    public function index(Request $request)
    {
        // Filtra los elementos con estado igual a 1
        $reserva = Reserva::where('eliminado', 1)->get();
        return view('reservas.reserva.reserva', compact('reserva'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $reservas=Reserva::all();
        return view('reservas.reserva.createReserva', compact('reservas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $reserva = new Reserva();
        $reserva->personas = $request->personas;
        $reserva->area = $request->area;
        $reserva->fecha = $request->fecha;
        $reserva->hora = $request->hora;
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
        return view('reservas.reserva.editReserva', compact('reserva', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $reserva = Reserva::find($id);
        $reserva->personas = $request->personas;
        $reserva->area = $request->area;
        $reserva->fecha = $request->fecha;
        $reserva->hora = $request->hora;
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
