<?php

namespace App\Http\Controllers;

use App\Models\PagoReserva;
use App\Models\Venta;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Barryvdh\DomPDF\PDF;

class BoletaPagoController extends Controller
{
    public function index()
    {
        // Lógica para mostrar una lista de boletas
    }

    public function show($id)
    {
        // Lógica para mostrar una boleta específica
    }

    public function store(Request $request)
    {
        // Lógica para almacenar una nueva boleta
    }

    // ------------------------------------------------------------------------------------------
    // Otros métodos y lógica según tus necesidades...

    public function generarBoletaPago($id)
    {
        $pagoReserva = PagoReserva::findOrFail($id);


        // Generar el código QR con los datos de la reserva
        $codigoQR = QrCode::size(300)->generate($pagoReserva);

        // Obtener la fecha y hora actual
        $fechaHoraGeneracion = date('Y-m-d H:i:s');


        // Lógica para generar la boleta de pago con la información de la reserva
        $pdf = app(PDF::class);
        $pdf->loadView('reservas.pagoReserva.boletaPago', compact('pagoReserva','codigoQR','fechaHoraGeneracion'));

        // Devolver el PDF como respuesta (puede descargar o mostrar en el navegador)
        return $pdf->stream('Boleta de pago de reserva.pdf', ['Attachment' => false]);
    }

    public function generarBoletaPagoVenta($id)
    {
        $venta = Venta::findOrFail($id);


        // Generar el código QR con los datos de la venta
        $codigoQR = QrCode::size(300)->generate($venta);

        // Obtener la fecha y hora actual
        $fechaHoraGeneracion = date('Y-m-d H:i:s');

        // Lógica para generar la boleta de pago con la información de la reserva
        $pdf = app(PDF::class);
        $pdf->loadView('venta.boletaPago', compact('venta','codigoQR','fechaHoraGeneracion'));

        // Devolver el PDF como respuesta (puede descargar o mostrar en el navegador)
        return $pdf->stream('Boleta de pago de venta.pdf', ['Attachment' => false]);
    }
}
