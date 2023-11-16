<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Empleado;
use App\Models\Contrato;
use App\Models\Role;
use App\Models\Horario;

use Illuminate\Support\Facades\App;


class ContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contratos = Contrato::all();
        $personal = Empleado::all();
        $idemp = auth()->user()->idEmpleado;
        $rol = ($contratos->find(($personal->find($idemp))->idContrato))->idRole;
        if ($rol == 1) {
            return view('rrhh.contratos', compact('personal', 'contratos'));
        } else {
            return view('admin.home');
        }
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $personal = Empleado::all();
        $roles = Role::all();
        $horarios = Horario::all();
        return view('rrhh.crearContrato', compact('personal', 'roles', 'horarios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $contrato = new Contrato();
        $contrato->fechaInicio = $request->fechaInicio;
        $contrato->duracionMeses = $request->duracionMeses;
        $contrato->sueldo = $request->sueldo;
        $contrato->idRole = $request->idRole;
        $contrato->idHorario = $request->idHorario;

        $contrato->save();
        $empleado = Empleado::find($request->idEmpleado);
        $empleado->idContrato = $contrato->idContrato;
        $empleado->save();
        return redirect()->route('contratos');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contrato = Contrato::find($id);
        $personal = Empleado::all();
        $roles = Role::all();
        $horarios = Horario::all();
        
        return view('rrhh.editarContrato', compact('personal', 'contrato', 'roles', 'horarios', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {   
        $contrato = Contrato::find($id);

        $contrato->fechaInicio = $request->fechaInicio;
        $contrato->duracionMeses = $request->duracionMeses;
        $contrato->sueldo = $request->sueldo;
        $contrato->idRole = $request->idRole;
        $contrato->idHorario = $request->idHorario;
        
        $contrato->save();

        return redirect()->route('contratos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function pdfContratos()
    {
        $personal = Empleado::all();
        $contratos = Contrato::all();
        
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML(view('rrhh.contratosPDF', compact('personal', 'contratos')));

        // return $pdf->download(); //Descarga automática
        return $pdf->stream('Reporte de Contratos.pdf'); //Abre una pestaña
    }
}
