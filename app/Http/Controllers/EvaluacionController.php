<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Evaluacion;
use App\Models\Empleado;
use App\Models\Contrato;
use App\Models\EmpleadoEvaluacion;

class EvaluacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!Auth::check()) {
            return redirect('');
        }
        $contratos = Contrato::all();
        $personal = Empleado::all();
        $idemp = auth()->user()->idEmpleado;
        $rol = ($contratos->find(($personal->find($idemp))->idContrato))->idRole;
        if ($rol != null) {
            if ($rol == 1) {
                $evaluaciones = Evaluacion::all();
                return view('rrhh.evaluaciones', compact('evaluaciones', 'personal'));
            } else {
                if ($rol == 3) {
                    $evaluaciones = Evaluacion::where('idEmpleado', $idemp)->get();
                    return view('rrhh.ctrlevaluaciones', compact('evaluaciones', 'personal'));
                } else {
                    return view('admin.home');
                }
            }
        } else {
            return view('home');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $contratos = Contrato::all();
        $personal = Empleado::all();
        return view('rrhh.crearEvaluacion', compact('contratos', 'personal'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $evaluacion = new Evaluacion();
        $evaluacion->asuntoEvaluacion = $request->asuntoEvaluacion;
        $evaluacion->areaEvaluacion = $request->areaEvaluacion;
        $evaluacion->fechaEvaluacion = $request->fechaEvaluacion;
        $evaluacion->idEmpleado = $request->idEmpleado;
        $evaluacion->save();
        return redirect()->route('evaluaciones');
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
    public function edit(string $id)
    {
        $contratos = Contrato::all();
        $personal = Empleado::all();
        $evaluacion = Evaluacion::find($id);
        return view('rrhh.editarEvaluacion', compact('evaluacion', 'id', 'personal', 'contratos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $evaluacion = Evaluacion::find($id);
        $evaluacion->asuntoEvaluacion = $request->asuntoEvaluacion;
        $evaluacion->areaEvaluacion = $request->areaEvaluacion;
        $evaluacion->fechaEvaluacion = $request->fechaEvaluacion;
        $evaluacion->idEmpleado = $request->idEmpleado;
        $evaluacion->save();
        return redirect()->route('evaluaciones');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $evaluacion = Evaluacion::find($id);
        $evaluacion->delete();
        return redirect()->route('evaluaciones');
    }

    public function asignaciones($id)
    {
        $contratos = Contrato::all();
        $personal = Empleado::all();
        $registrados = EmpleadoEvaluacion::where('ideval', $id)->get();
        return view('rrhh.asignaciones', compact('personal', 'contratos', 'registrados', 'id'));
    }

    public function asignar(Request $request, $id)
    {
        $marcados = $request->input('asignados');
        foreach ($marcados as $idEmpleado) {
            if (!is_null($idEmpleado)) {
                $enev = new EmpleadoEvaluacion();
                $enev->idemple = intval($idEmpleado);
                $enev->ideval = $id;
                $enev->save();
            }
        }
        return redirect()->route('evaluaciones');
    }

    public function asignados($id)
    {
        $registrados = EmpleadoEvaluacion::where('ideval', $id)->get();
        $personal = Empleado::all();
        return view('rrhh.asignados', compact('personal','registrados', 'id'));
    }

    public function calificar(Request $request, $id)
    {
        $calificaciones = $request->input('calificaciones');

        foreach ($calificaciones as $idEmpleado => $calificacion) {
            $registro = EmpleadoEvaluacion::where('ideval', $id)->where('idemple', $idEmpleado)->first();
            $registro->calificacion = $calificacion;
            $registro->save();
        }

        return redirect()->route('evaluaciones');
    }
}
