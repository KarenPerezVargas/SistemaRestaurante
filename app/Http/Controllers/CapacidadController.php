<?php

namespace App\Http\Controllers;

use App\Models\Capacidad;
use Illuminate\Http\Request;

class CapacidadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $registrar = Capacidad::all();
        return view('marketing.asistencia', compact('registrar'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('marketing.crearCliente');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $asistencia = new Capacidad();
        $asistencia->nombre = $request->nombre;
        $asistencia->dni = $request->dni;
        $asistencia->telefono = $request->telefono;
        $asistencia->save();
        return redirect()->route('asistencia');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {   
        $asistencia = Capacidad::find($id);
        return view('marketing.editarAsistente', compact('asistencia', 'id'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $asistencia = Capacidad::find($id);
        $asistencia->nombre = $request->nombre;
        $asistencia->dni = $request->dni;
        $asistencia->telefono = $request->telefono;
        $asistencia->save();
        return redirect()->route('asistencia');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $asistencia = Capacidad::find($id);
        $asistencia->delete();
        return redirect()->route('asistencia');
    }
}
