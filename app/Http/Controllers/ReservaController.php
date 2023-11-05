<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use App\Models\Mesa;

use App\Models\Reserva;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {
        $reserva = Reserva::all();
        //$reserva = Reserva::find($id);
        $cliente = $reserva->cliente_id;
        $mesa = $reserva->mesa_id;

        return view('reservas.reserva.reserva', compact('reserva', 'cliente_id', 'mesa_id'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cliente = Cliente::all();
        $mesa = Mesa::all();
        return view('reservas.reserva.createReserva', compact('cliente', 'mesa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $reserva = new Reserva();
        $reserva->reserva_fecha = $request->reserva_fecha;
        $reserva->reserva_hora = $request->reserva_hora;
        $reserva->reserva_cantidad = $request->reserva_cantidad;
        $reserva->reserva_estado = $request->reserva_estado;
        $reserva->cliente_id = $request->cliente_id;
        $reserva->mesa_id = $request->mesa_id;
        $reserva->save();
        return redirect()->route('reserva');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reserva $reserva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,string $id)
    {
        $cliente = Cliente::find($id);
        $cliente = Cliente::all();
        $mesa = Mesa::all();
        return view('reservas.reserva.editReserva', compact('reserva', 'cliente', 'mesa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $reserva = Reserva::find($id);
        $reserva->reserva_fecha = $request->reserva_fecha;
        $reserva->reserva_hora = $request->reserva_hora;
        $reserva->reserva_cantidad = $request->reserva_cantidad;
        $reserva->reserva_estado = $request->reserva_estado;
        $reserva->cliente_id = $request->cliente_id;
        $reserva->mesa_id = $request->mesa_id;
        $reserva->save();
        return redirect()->route('reserva');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $reserva = Reserva::find($id);
        $reserva->delete();
        return redirect()->route('reserva');
    }
}





// ...class ReservaController extends Controller
// ... {
    // ...

    // ...public function mostrarReserva($id)
   // ... {
        // ...$reserva = Reserva::find($id);
    // ...    $clienteDeLaReserva = $reserva->cliente;
    // ...    $mesaDeLaReserva = $reserva->mesa;

   // ...     return view('reservas.mostrar', compact('reserva', 'clienteDeLaReserva', 'mesaDeLaReserva'));
   // ... }

    // ...public function editarReserva($id)
    // ...{
   // ...    $reserva = Reserva::find($id);
    // ...    $clienteDeLaReserva = $reserva->cliente;
    // ...     $mesaDeLaReserva = $reserva->mesa;

        // Aquí puedes cargar la vista de edición con los datos de la reserva y las tablas relacionadas
    // ...     return view('reservas.editar', compact('reserva', 'clienteDeLaReserva', 'mesaDeLaReserva'));
    // ... }

    // ... public function actualizarReserva(Request $request, $id)
    // ... {
        // Aquí puedes actualizar la reserva y sus relaciones con Cliente y Mesa
        // Recuerda validar y guardar los datos según tus necesidades

        // Ejemplo de cómo podrías actualizar la relación con Cliente (dependiendo de tus campos)
    // ...     $reserva = Reserva::find($id);
    // ...     $reserva->cliente->update([
    // ...         'nombre' => $request->nombre,
    // ...         'apellido' => $request->apellido,
            // Agrega aquí otros campos que desees actualizar
    // ...     ]);

        // De manera similar, actualiza la relación con Mesa si es necesario

     // ...    return redirect()->route('reservas.mostrar', $id)->with('success', 'Reserva actualizada con éxito');
    // ... }

    // ...
// ... }
