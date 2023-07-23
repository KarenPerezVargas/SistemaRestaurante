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
        /*     if (auth()->user()->idEmpleado == null) {
                return view('home');
            } else {
                return view('admin.home');
            }
        } else { */
            // dd(auth()->user()->idEmpleado);
            $contratos = Contrato::all();
            $personal = Empleado::all();
            $idemp = auth()->user()->idEmpleado;
            $rol = ($contratos->find(($personal->find($idemp))->idContrato))->idRole;
            if ($rol == null) {
                return view('home');
            }
            if ($rol == 1 || $rol == 2 || $rol == 3) {
                return view('admin.home');
            }
            if ($rol == 5) {
                return view('pedidos.personalPedidos.asesoramiento.index');
            }
            return view('index');
        }
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
