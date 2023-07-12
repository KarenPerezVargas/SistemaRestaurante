<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function show() {
        if (Auth::check()) {
            return redirect('home');//home
        }
        return view('login');
    }

    public function login(LoginRequest $request) {
        $credentials = $request->getCredentials();
        if (!Auth::validate($credentials)) {
            return redirect()->to('login')->withErrors('auth.failed');
        }
        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        Auth::login($user);
        return $this->authenticated($request, $user);
    }

    public function authenticated(Request $request, $user) {
        return redirect()->to('home');//home
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return redirect('');
    }
}
