<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return view('index');
        } else {
            return redirect()->route('home');
        }
    }

    public function show() {
        if (Auth::check()) {
            return redirect('home');
        } else {
            return view('register');
        }
    }

    public function register(RegisterRequest $request) {
        $data = $request->validated();

        if ($data['username'] === 'admin') {
            $data['idEmpleado'] = 1;
        }

        $user = User::create($data);
        // auth()->login($user);
        return redirect('')->with('success', 'Cuenta creada satisfactoriamente');
    }
}
