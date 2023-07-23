<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsesoramientoController extends Controller
{
    public function index(){
        return view('pedidos.personalPedidos.asesoramiento.index');
    }
}
