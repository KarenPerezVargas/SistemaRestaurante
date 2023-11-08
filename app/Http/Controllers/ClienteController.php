<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index(Request $request)
    {
        // Filtra los elementos con estado igual a 1
        $cliente = Cliente::where('eliminado', 1)->get();

        return view('reservas.cliente.cliente', compact('cliente'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes=Cliente::all();
        return view('reservas.cliente.createCliente', compact('clientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente->nombres = $request->nombres;
        $cliente->apellidos = $request->apellidos;
        $cliente->dni = $request->dni;
        $cliente->correo = $request->correo;
        $cliente->telefono = $request->telefono;
        $cliente->eliminado = 1;
        $cliente->save();
        return redirect()->route('cliente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,string $id)
    {
        $cliente = Cliente::find($id);
        return view('reservas.cliente.editCliente', compact('cliente', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cliente = Cliente::find($id);
        $cliente->nombres = $request->nombres;
        $cliente->apellidos = $request->apellidos;
        $cliente->dni = $request->dni;
        $cliente->correo = $request->correo;
        $cliente->telefono = $request->telefono;
        $cliente->eliminado = 1;
        $cliente->save();
        return redirect()->route('cliente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->eliminado = 0;
        $cliente->save();
        return redirect()->route('cliente');
    }
}
