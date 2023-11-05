<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;

class ReservaController extends Controller
{
    const PAGINATION = 5;
    public function index(Request $request)
    {
        $buscarpor = $request->get('buscarpor');
        $reserva = Reserva::where('estado','=','1')->where('nombre','like','%'.$buscarpor.'%')->paginate($this::PAGINATION);
        return view('reservas.reserva.index',compact('reserva','buscarpor'));
    }

    public function create()
    {
        $reservas=Reserva::all();
        return view('reservas.reserva.create',compact('reservas'));
    }

    public function store(Request $request)
    {

        $reserva = new Reserva();
        $reserva->nombre = $request->nombre;
        $reserva->fecha = $request->fecha;
        $reserva->hora = $request->hora;
        $reserva->nroPersonas = $request->nroPersonas;
        $reserva->area = $request->area;
        $reserva->mesa = $request->mesa;
        $reserva->estadoReserva = 'Pendiente';
        $reserva->estado = 1;
        $reserva->save();
        return redirect()->route('reserva.index')->with('datos', 'Registro nuevo guardado');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $reserva = Reserva::findOrFail($id);
        return view('reserva.edit', compact('reserva'));
    }

    public function update(Request $request, $id)
    {
        $reserva = Reserva::find($id);
        $reserva->nombre = $request->nombre;
        $reserva->fecha = $request->fecha;
        $reserva->hora = $request->hora;
        $reserva->nroPersonas = $request->nroPersonas;
        $reserva->area = $request->area;
        $reserva->mesa = $request->mesa;
        $reserva->estado = 1;
        $reserva->save();
        return redirect()->route('reserva.index')->with('datos' . 'Registro nuevo actualizado...');
    }


    public function confirmar($id){
        $reserva = Reserva::findOrFail($id);
        return view('reserva.confirmar',compact('reserva'));
    }

    public function destroy($id)
    {
        $reserva = Reserva::find($id);
        $reserva->estado = 0;
        $reserva->save();
        return redirect()->route('reserva.index')->with('datos','Registro eliminado');
    }
}
