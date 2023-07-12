<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function show() {
        if (Auth::check()) {
            return redirect('home');
        } else {
            return view('register');
        }
    }

    public function register(RegisterRequest $request) {
        $user = User::create($request->validated());
        // auth()->login($user);
        // return redirect('')->with('success', 'Cuenta creada satisfactoriamente');
        return redirect()->back();
    }
}
