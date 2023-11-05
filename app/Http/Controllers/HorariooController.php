<?php

namespace App\Http\Controllers;

use App\Models\Horarioo;
use Illuminate\Http\Request;

class HorariooController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $horarioo = Horarioo::all();
        return view('pedidos.repartidor.horario.horarioo', compact('horarioo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pedidos.repartidor.horario.createHorarioo');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $horarioo = new Horarioo();
        $horarioo->fecha = $request->fecha;
        $horarioo->hora = $request->hora;
        $horarioo->save();
        return redirect()->route('horarioo');
    }

    /**
     * Display the specified resource.
     */
    public function show(Horarioo $horarioo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,string $id)
    {
        $horarioo = Horarioo::find($id);
        return view('pedidos.repartidor.horario.editHorarioo', compact('horarioo', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $horarioo = Horarioo::find($id);
        $horarioo->fecha = $request->fecha;
        $horarioo->hora = $request->hora;
        $horarioo->save();
        return redirect()->route('horarioo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $horarioo = Horarioo::find($id);
        $horarioo->delete();
        return redirect()->route('horarioo');
    }
}
