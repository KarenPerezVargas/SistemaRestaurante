<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Contrato;
use App\Models\Empleado;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

use Barryvdh\DomPDF\Facade\Pdf;

class UserController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $user = auth()->user();
            $rol = $user->empleado->contrato->idRole ?? null;
            // dd($rol);

            $views = [
                1 => 'admin.home',
                2 => 'rrhh.instructor.instructor.index',
                3 => 'rrhh.supervisor.supervisor.index',
                4 => 'recursos.reclutador.reclutador.index',
                5 => 'rrhh.gerenterrhh.gerenterrhh.index',
                6 => 'pedidos.personalPedidos.asesoramiento.index',
                7 => 'pedidos.repartidor.repartidor.index',
                8 => 'pedidos.cliente.cliente.index', // Redirige a una vista predeterminada
                9 => 'marketing.gerentemarketing.gerente.index', // Redirige a una vista predeterminada
                10 => 'marketing.coordinadoreventos.coordinador.index',
                11 => 'marketing.disenadorpubli.disenador.index',
                12 => 'marketing.agentepubli.agente.index',
                13 => 'inventario.gerentealmacen.gerente.index',
                14 => 'inventario.personalalmacen.personal.index',
                15 => 'inventario.contador.contador.index',
                16 => 'reservas.recepcionista.recepcionista.index',
            ];

            $viewName = $views[$rol] ?? 'index';

            return view($viewName);
        }

        return view('home');
    }


    public function show()
    {

    }

    public function create()
    {

    }







    public function showPerfil() {
        $user = User::find(auth()->user()->id);
        if (auth()->user()->idEmpleado == null) {
            return view('perfil', compact('user'));
        } else {
            /* $att = Artista::all();
            $abm = Album::all();
            $ccn = Cancion::all(); */
            return view('admin.perfil', compact('user'/* , 'att', 'abm', 'ccn' */));
        }
    }

    public function editPerfil() {
        $user = User::find(auth()->user()->id);
        if (auth()->user()->role == 'user') {
            return view('editar', compact('user'));
        } else {
            /* $att = Artista::all();
            $abm = Album::all();
            $ccn = Cancion::all(); */
            return view('admin.editar', compact('user'/* , 'att', 'abm', 'ccn' */));
        }
    }

    public function updatePerfil(Request $request) {
        $user = User::find(auth()->user()->id);
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = $request->password;
        if ($request->hasFile('perfil')) {
            $request->file('perfil')->move('users/', $user->id.'.jpg');
        }
        $user->save();
        return redirect()->route('perfil');
    }

    public function destroyPerfil($id) {
        $comentarios = Comentario::where('iduser', $id);
        $comentarios->delete();
        $user = User::find($id);
        Storage::delete('public/users/'.$user->id.'.jpg');
        $user->delete();
        return redirect()->route('salir');
    }
}
