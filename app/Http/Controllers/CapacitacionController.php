<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Capacitacion;
use App\Models\Empleado;
use App\Models\Contrato;
use App\Models\User;

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
        /* $roles = Role::all(); */
        $contratos = Contrato::all();
        $personal = Empleado::all();
        $rol = ($contratos->find(($personal->find(auth()->user()->idEmpleado))->idContrato))->idRole;
        if ($rol != 1) {
            if ($rol == 2 || $rol == 3) {
                $capacitaciones = Capacitacion::all();
                return view('admin.capacitaciones', compact('capacitaciones'));
            } else {
                return view('admin.home');
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
        $users = User::all();
        return view('admin.crearCapacitacion', compact('users'));
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
        $capacitacion->fechaCapacitacion = $request->fechaCapacitacion;
        $capacitacion->lugarCapacitacion = $request->lugarCapacitacion;
        $capacitacion->iduser = $request->idUser;
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
        $users = User::all();
        $capacitacion = Capacitacion::find($id);
        return view('admin.editarCapacitacion', compact('capacitacion', 'users'));
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
        $capacitacion->fechaCapacitacion = $request->fechaCapacitacion;
        $capacitacion->lugarCapacitacion = $request->lugarCapacitacion;
        $capacitacion->iduser = $request->idUser;
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
}
