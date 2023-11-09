<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Mesa;
use App\Models\Reserva;
use App\Models\PagoReserva;
use Illuminate\Support\Facades\Date;

class PagoReservaController extends Controller
{
    public function index(Request $request)
    {
        // Filtra los elementos con estado igual a 1
        $pagoReservas = PagoReserva::where('eliminado', 1)->get();
        $clientes = Cliente::all();
        $mesas = Mesa::all();
        $reservas = Reserva::all();
        return view('reservas.pagoReserva.pagoReserva', compact('clientes','mesas','reservas','pagoReservas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request,string $id)
    {
        $reserva = Reserva::find($id);
        $pagoReservas = PagoReserva::all();
        $clientes = Cliente::all();
        $mesas = Mesa::all();
        return view('reservas.pagoReserva.createPagoReserva', compact('reserva','clientes','mesas','pagoReservas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pagoReserva = new PagoReserva();
        $pagoReserva->reserva_id = $request->reserva_id;
        $pagoReserva->monto = $request->monto;
        $pagoReserva->vuelto = $request->vuelto;
        $pagoReserva->metodo_pago = $request->metodo_pago;
        $pagoReserva->fecha_pago = $request->fecha_pago;
        $pagoReserva->eliminado = 1;
        $pagoReserva->save();
        return redirect()->route('pagoReserva');
    }

    /**
     * Display the specified resource.
     */
    public function show(PagoReserva $pagoReserva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,string $id)
    {
        $pagoReserva = PagoReserva::find($id);
        $reserva = Reserva::find($id);
        $clientes = Cliente::all();
        $mesas = Mesa::all();
        return view('reservas.pagoReserva.editPagoReserva', compact('id','clientes','mesas','reserva','pagoReserva'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pagoReserva = PagoReserva::find($id);
        $pagoReserva->reserva_id = $request->reserva_id;
        $pagoReserva->monto = $request->monto;
        $pagoReserva->vuelto = $request->vuelto;
        $pagoReserva->metodo_pago = $request->metodo_pago;
        $pagoReserva->fecha_pago = $request->fecha_pago;
        $pagoReserva->save();
        return redirect()->route('pagoReserva');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pagoReserva = PagoReserva::find($id);
        $pagoReserva->eliminado = 0;
        $pagoReserva->save();
        return redirect()->route('pagoReserva');
    }
}
