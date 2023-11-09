<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use PDF;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $evento = Evento::all();

        return view('marketing.coordinadoreventos.eventos.evento', compact('evento'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('marketing.coordinadoreventos.eventos.createEvento');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $evento = new Evento();
        $evento->fecha_evento = $request->fecha_evento;
        $evento->nombre_evento = $request->nombre_evento;
        $evento->descripcion_evento = $request->descripcion_evento;
        $evento->direccion_evento = $request->direccion_evento;
        $evento->save();

        return redirect()->route('evento');
    }

    /**
     * Display the specified resource.
     */
    public function show(Evento $evento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,string $id)
    {
        $evento = Evento::find($id);
        return view('marketing.coordinadoreventos.eventos.editEvento', compact('evento', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $evento = Evento::find($id);
        $evento->fecha_evento = $request->fecha_evento;
        $evento->nombre_evento = $request->nombre_evento;
        $evento->descripcion_evento = $request->descripcion_evento;
        $evento->direccion_evento = $request->direccion_evento;
        $evento->save();
        return redirect()->route('evento');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $evento = Evento::find($id);
        $evento->delete();
        return redirect()->route('evento');
    }

    public function pdf1()
    {
        $evento = Evento::all();
        
        //$proveedor = Proveedor::find($compra->proveedor_id);
        //$transporte = Transporte::find($compra->transporte_id);

        // Generamos el PDF
        $pdf = PDF::loadView('marketing.coordinadoreventos.eventos.reporte', compact('evento'));

        // Abrimos el PDF en una nueva pestaña
        return $pdf->stream('Reporte de eventos.pdf', ['target' => '_blank']);

        // return $pdf->stream();

    }
}
