<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Empleado;
use App\Models\Contrato;
use App\Models\Role;
use App\Models\Horario;

use PDF;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if (!Auth::check()) {
            return redirect('');
        }
        $contratos = Contrato::all();
        $personal = Empleado::all();
        $rol = ($contratos->find(($personal->find(auth()->user()->idEmpleado))->idContrato))->idRole;
        if ($rol == 1) {
            $request->session()->forget(['apellidos', 'nombre', 'dni', 'telefono', 'direccion', 'fechaInicio', 'duracionMeses', 'sueldo', 'idRole', 'idHorario']);
            $roles = Role::all();
            $contratos = Contrato::all();
            $personal = Empleado::all();
            return view('rrhh.personal', compact('roles', 'contratos', 'personal'));
        } else {
            return view('admin.home');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create1(Request $request)
    {
        $apellidos = $request->session()->get('apellidos');
        $nombre = $request->session()->get('nombre');
        $dni = $request->session()->get('dni');
        $telefono = $request->session()->get('telefono');
        $direccion = $request->session()->get('direccion');

        return view('rrhh.crearEmpleado', compact('apellidos', 'nombre', 'dni', 'telefono', 'direccion'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store1(Request $request)
    {
        $request->validate([
            'apellidos' => 'required',
            'nombre' => 'required',
            'dni' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
        ]);

        $request->session()->put('apellidos', $request->input('apellidos'));
        $request->session()->put('nombre', $request->input('nombre'));
        $request->session()->put('dni', $request->input('dni'));
        $request->session()->put('telefono', $request->input('telefono'));
        $request->session()->put('direccion', $request->input('direccion'));

        return redirect()->route('personaldos');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create2(Request $request)
    {
        $fechaInicio = $request->session()->get('fechaInicio');
        $duracionMeses = $request->session()->get('duracionMeses');
        $sueldo = $request->session()->get('sueldo');
        $idRole = $request->session()->get('idRole');
        $idHorario = $request->session()->get('idHorario');

        $horarios = Horario::all();
        $roles = Role::all();
        return view('rrhh.personalContrato', compact('horarios', 'roles', 'fechaInicio', 'duracionMeses', 'sueldo', 'idRole', 'idHorario'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store2(Request $request)
    {
        $request->validate([
            'fechaInicio' => 'required',
            'duracionMeses' => 'required',
            'sueldo' => 'required',
            'idRole' => 'required',
            'idHorario' => 'required',
        ]);

        $request->session()->put('fechaInicio', $request->input('fechaInicio'));
        $request->session()->put('duracionMeses', $request->input('duracionMeses'));
        $request->session()->put('sueldo', $request->input('sueldo'));
        $request->session()->put('idRole', $request->input('idRole'));
        $request->session()->put('idHorario', $request->input('idHorario'));

        return redirect()->route('personaltres');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create3(Request $request)
    {
        $username = $request->session()->get('username');
        $email = $request->session()->get('email');

        return view('rrhh.personalUsuario', compact('username', 'email'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store3(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $contrato = new Contrato();
        $contrato->fechaInicio = $request->session()->get('fechaInicio');
        $contrato->duracionMeses = $request->session()->get('duracionMeses');
        $contrato->sueldo = $request->session()->get('sueldo');
        $contrato->idRole = $request->session()->get('idRole');
        $contrato->idHorario = $request->session()->get('idHorario');
        $contrato->save();

        $empleado = new Empleado();
        $empleado->apellidos = $request->session()->get('apellidos');
        $empleado->nombre = $request->session()->get('nombre');
        $empleado->dni = $request->session()->get('dni');
        $empleado->telefono = $request->session()->get('telefono');
        $empleado->direccion = $request->session()->get('direccion');
        $empleado->idContrato = $contrato->idContrato;
        $empleado->save();

        $user = new User();
        $user->username = $request->input("username");
        $user->email = $request->input("email");
        $user->password = $request->input("password");
        $user->idEmpleado = $empleado->idEmpleado;
        $user->save();

        $request->session()->forget(['apellidos', 'nombre', 'dni', 'telefono', 'direccion', 'fechaInicio', 'duracionMeses', 'sueldo', 'idRole', 'idHorario']);

        return redirect()->route('personal');

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
        $empleado = Empleado::find($id);
        return view('rrhh.editarEmpleado', compact('empleado', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $empleado = Empleado::find($id);
        $empleado->apellidos = $request->apellidos;
        $empleado->nombre = $request->nombre;
        $empleado->dni = $request->dni;
        $empleado->telefono = $request->telefono;
        $empleado->direccion = $request->direccion;
        $empleado->save();
        return redirect()->route('personal');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $empleado = Empleado::find($id);
        $empleado->delete();
        return redirect()->route('personal');
    }

    public function pdfCompra()
    {
        $roles = Role::all();
        $contratos = Contrato::all();
        $personal = Empleado::all();
            
        // Generamos el PDF
        $pdf = PDF::loadView('rrhh.personalpdf', compact('roles', 'contratos', 'personal'));
        
        // Abrimos el PDF en una nueva pestaña
        return $pdf->stream('Reporte de Empleados.pdf', ['target' => '_blank']);

        // return $pdf->stream();   
    }
}
