<?php

namespace App\Http\Controllers;

use App\Models\HorarioEntrega;
use Illuminate\Http\Request;
use App\Models\Transporte;
use PDF;

class HorarioEntregaController extends Controller
{
    /**public function copiarDatos()
    {
        $datosOrigen = Transporte::all();

        foreach ($datosOrigen as $dato) {
            $nuevoDato = new HorarioEntrega([
                'trans_codigo' => $dato->trans_codigo,
                // Otras columnas...
            ]);
            $nuevoDato->save();
        }
    }*/
    /**
     * Display a listing of the resource.
    */
    public function index()
    {
        $transporte = Transporte::all();
        $horario = HorarioEntrega::all();
        return view('inventario.horario.horario', compact('horario','transporte'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $transporte = Transporte::all();
        $horario = HorarioEntrega::all();
        return view('inventario.horario.createHorario', compact('horario','transporte'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $transporte = Transporte::find($request->transporte_id);
        $horario = new HorarioEntrega();
        $horario->fecha = $request->fecha;
        $horario->transporte_id = $request->transporte_id;
        $horario->hora_salida = $request->hora_salida;
        $horario->hora_esperada = $request->hora_esperada;
        $horario->save();
        return redirect()->route('horario');
    }

    /**
     * Display the specified resource.
     */
    public function show(HorarioEntrega $horarioEntrega)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,string $id)
    {
        $transporte = Transporte::all();
        $horario = HorarioEntrega::find($id);
        return view('inventario.horario.editHorario', compact('horario','transporte','id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $horario = HorarioEntrega::find($id);
        $transporte = Transporte::find($request->transporte_id);
        $horario->fecha = $request->fecha;
        $horario->transporte_id = $request->transporte_id;
        $horario->hora_salida = $request->hora_salida;
        $horario->hora_esperada = $request->hora_esperada;
        $horario->save();
        return redirect()->route('horario');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $transporte = HorarioEntrega::find($id);
        $transporte->delete();
        return redirect()->route('horario');
    }

    public function pdf1()
    {
        $horario = HorarioEntrega::all();
        $transporte = Transporte::all();

        // Generamos el PDF
        $pdf = PDF::loadView('inventario.horario.reporte', compact('horario','transporte'));

        // Abrimos el PDF en una nueva pestaña
        return $pdf->stream('Reporte de horarios.pdf', ['target' => '_blank']);

        // return $pdf->stream();

    }
}
