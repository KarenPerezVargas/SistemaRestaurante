<?php

namespace App\Http\Controllers;

use App\Models\HorarioEntrega;
use Illuminate\Http\Request;
use App\Models\Transporte;

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
        $horario = HorarioEntrega::all();
        return view('inventario.horario.horario', compact('horario'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('inventario.horario.createHorario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $horario = new HorarioEntrega();
        $horario->fecha = $request->fecha;
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
        $horario = HorarioEntrega::find($id);
        return view('inventario.horario.editHorario', compact('horario', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $horario = HorarioEntrega::find($id);
        $horario->fecha = $request->fecha;
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
}
