<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Capacitacion;
use App\Models\Empleado;
use App\Models\Contrato;
use App\Models\EmpleadoCapacitacion;

class CapacitacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
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
                $capacitaciones = Capacitacion::all();
                return view('admin.capacitaciones', compact('capacitaciones', 'personal'));
            } else {
                if ($rol == 2) {
                    $capacitaciones = Capacitacion::where('idEmpleado', $idemp)->get();
                    return view('admin.ctrlcapacitaciones', compact('capacitaciones', 'personal'));
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
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contratos = Contrato::all();
        $personal = Empleado::all();
        return view('admin.crearCapacitacion', compact('contratos', 'personal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $capacitacion = new Capacitacion();
        $capacitacion->temaCapacitacion = $request->temaCapacitacion;
        $capacitacion->areaCapacitacion = $request->areaCapacitacion;
        $capacitacion->fechaCapacitacion = $request->fechaCapacitacion;
        $capacitacion->idEmpleado = $request->idEmpleado;
        $capacitacion->save();
        return redirect()->route('capacitaciones');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contratos = Contrato::all();
        $personal = Empleado::all();
        $capacitacion = Capacitacion::find($id);
        return view('admin.editarCapacitacion', compact('capacitacion', 'personal', 'contratos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request/* , $id */)
    {
        $capacitacion = Capacitacion::find($request->idCapacitacion);
        $capacitacion->temaCapacitacion = $request->temaCapacitacion;
        $capacitacion->areaCapacitacion = $request->areaCapacitacion;
        $capacitacion->fechaCapacitacion = $request->fechaCapacitacion;
        $capacitacion->idEmpleado = $request->idEmpleado;
        $capacitacion->save();
        return redirect()->route('capacitaciones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $capacitacion = Capacitacion::find($id);
        $capacitacion->delete();
        return redirect()->route('home');
    }

    public function inscripciones($id)
    {
        $contratos = Contrato::all();
        $personal = Empleado::all();
        $registrados = EmpleadoCapacitacion::where('idcapa', $id)->get();
        return view('admin.inscripciones', compact('personal', 'contratos', 'registrados', 'id'));
    }

    public function inscribir(Request $request, $id)
    {
        $marcados = $request->input('inscritos');
        foreach ($marcados as $idEmpleado) {
            if (!is_null($idEmpleado)) {
                $enca = new EmpleadoCapacitacion();
                // dd($idEmpleado);
                $enca->idemple = intval($idEmpleado);
                $enca->idcapa = $id;
                $enca->save();
            }
        }
        return redirect()->route('capacitaciones');
    }
}
