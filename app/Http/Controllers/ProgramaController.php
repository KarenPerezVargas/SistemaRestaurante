<?php

namespace App\Http\Controllers;

use App\Models\Programa;
use Illuminate\Http\Request;
use PDF;

class ProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programa = Programa::all();

        return view('marketing.coordinadoreventos.programas.programa', compact('programa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('marketing.coordinadoreventos.programas.createPrograma');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $programa = new Programa();
        $programa->programa_fecha = $request->programa_fecha;
        $programa->programa_nombre = $request->programa_nombre;
        $programa->programa_descripcion = $request->programa_descripcion;
        $programa->programa_requisitos = $request->programa_requisitos;
        $programa->programa_recompensas = $request->programa_recompensas;
        $programa->save();

        return redirect()->route('programa');
    }

    /**
     * Display the specified resource.
     */
    public function show(Programa $programa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {
        $programa = Programa::find($id);

        return view('marketing.coordinadoreventos.programas.editPrograma', compact('programa', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $programa = Programa::find($id);
        $programa->programa_fecha = $request->programa_fecha;
        $programa->programa_nombre = $request->programa_nombre;
        $programa->programa_descripcion = $request->programa_descripcion;
        $programa->programa_requisitos = $request->programa_requisitos;
        $programa->programa_recompensas = $request->programa_recompensas;
        $programa->save();

        return redirect()->route('programa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $programa = Programa::find($id);
        $programa->delete();
        return redirect()->route('programa');
    }

    public function pdf1()
    {
        $programa = Programa::all();

        // Generamos el PDF
        $pdf = PDF::loadView('marketing.coordinadoreventos.programas.reporte', compact('programa'));

        // Abrimos el PDF en una nueva pestaña
        return $pdf->stream('Reporte de programa.pdf', ['target' => '_blank']);

        // return $pdf->stream();

    }
}
