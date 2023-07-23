<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\EmpleadoCapacitacion;
use App\Models\Capacitacion;
use App\Models\EmpleadoEvaluacion;
use App\Models\Evaluacion;

use PDF;

class ReporteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personal = Empleado::all();
        return view('rrhh.reportes', compact('personal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show1(string $id)
    {
        $empleado = Empleado::find($id);
        $registros = EmpleadoCapacitacion::where('idemple' , $id)->get();
        $capacitaciones = Capacitacion::all();
        return view('rrhh.desarrollo', compact('empleado', 'registros', 'capacitaciones'));
    }

    public function show2(string $id)
    {
        $empleado = Empleado::find($id);
        $registros = EmpleadoEvaluacion::where('idemple' , $id)->get();
        $evaluaciones = Evaluacion::all();
        return view('rrhh.valoracion', compact('empleado', 'registros', 'evaluaciones'));
    }

    public function pdf1($id)
    {
        $empleado = Empleado::find($id);
        $registros = EmpleadoCapacitacion::where('idemple' , $id)->get();
        $capacitaciones = Capacitacion::all();
        $pdf = PDF::loadView('rrhh.desarrollopdf', ['empleado'=>$empleado, 'registros'=>$registros, 'capacitaciones'=>$capacitaciones]);
        return $pdf->stream();
        // return view('rrhh.desarrollopdf', compact('empleado', 'registros', 'capacitaciones'));
    }

    public function pdf2($id)
    {
        $empleado = Empleado::find($id);
        $registros = EmpleadoEvaluacion::where('idemple' , $id)->get();
        $evaluaciones = Evaluacion::all();
        $pdf = PDF::loadView('rrhh.valoracionpdf', ['empleado'=>$empleado, 'registros'=>$registros, 'evaluaciones'=>$evaluaciones]);
        return $pdf->stream();
        // return view('rrhh.valoracionpdf', compact('empleado', 'registros', 'evaluaciones'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
