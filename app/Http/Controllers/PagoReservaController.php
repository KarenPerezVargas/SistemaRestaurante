<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Mesa;
use App\Models\Reserva;
use App\Models\PagoReserva;
use Carbon\Carbon;
use Barryvdh\DomPDF\PDF;

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
        // $clientes = Cliente::all();
        // $mesas = Mesa::all();
        // return view('reservas.pagoReserva.createPagoReserva', compact('reserva','clientes','mesas','pagoReservas'));
        return view('reservas.pagoReserva.createPagoReserva', compact('reserva','pagoReservas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pagoReserva = new PagoReserva();
        $pagoReserva->reserva_id = $request->reserva_id;
        $pagoReserva->monto = $request->monto;
        $pagoReserva->vuelto = $request->monto - $request->precio;
        $pagoReserva->metodo_pago = $request->metodo_pago;
        $pagoReserva->fecha_pago = Carbon::now();
        $pagoReserva->eliminado = 1;
        $pagoReserva->save();

        $reserva = Reserva::find($request->reserva_id);
        $reserva->pagado = 0;
        $reserva->save();

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
        // $reserva = Reserva::find($id);
        // $clientes = Cliente::all();
        // $mesas = Mesa::all();
        // return view('reservas.pagoReserva.editPagoReserva', compact('id','clientes','mesas','reserva','pagoReserva'));
        return view('reservas.pagoReserva.editPagoReserva', compact('id','pagoReserva'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pagoReserva = PagoReserva::find($id);
        $pagoReserva->monto = $request->monto;
        $pagoReserva->vuelto = $request->monto - $request->precio;
        $pagoReserva->metodo_pago = $request->metodo_pago;
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

        $reserva = Reserva::find($pagoReserva->reserva_id);
        $reserva->pagado = 1;
        $reserva->save();

        return redirect()->route('pagoReserva');
    }

    // Crear pdf para el reporte

    public function pdf1()
    {
        $pagoReservas = PagoReserva::all();
        $reservas = Reserva::all();
        $clientes = Cliente::all();

        // Generamos el PDF
        $pdf = app(PDF::class);
        $pdf->loadView('reservas.pagoReserva.reporte', compact('pagoReservas', 'reservas','clientes'));

        // Abrimos el PDF en una nueva pestaña
        return $pdf->stream('Reporte de pagos de reservas.pdf', ['Attachment' => false]);

    }
}
