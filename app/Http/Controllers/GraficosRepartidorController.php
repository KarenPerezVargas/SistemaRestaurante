<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zona;
use App\Models\Horarioo;
use Dompdf\Dompdf;
use Dompdf\Options;
use Carbon\Carbon;
use Cake\Chronos\Chronos;

class GraficosRepartidorController extends Controller
{
    public function reporteZona(Request $request)
    {
        $zona = Zona::all();
        $html = view('pedidos.repartidor.consulta.reporteZona', compact('zona'))->render();

        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);

        $dompdf->render();

        $dompdf->stream("Zonas_de_entrega.pdf", array("Attachment" => false));
    }

    public function reporteHorarioo(Request $request)
    {
        $horarioo = Horarioo::all();
        $html = view('pedidos.repartidor.consulta.reporteHorarioo', compact('horarioo'))->render();

        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);

        $dompdf->render();

        $dompdf->stream("Horarios_de_entrega.pdf", array("Attachment" => false));
    }

    public function graficosRepartidor(Request $request)
    {
        $zona = Zona::all();
        $counts = $zona->groupBy('distrito')->map->count();
        $horarioo = Horarioo::all();

        // Crear una nueva colección con la concatenación de fecha y hora
        $timestamps = $horarioo->map(function ($horarioo) {
            return $horarioo->fecha . ' ' . $horarioo->hora;
        });

        // Obtener la cantidad de registros por timestamp
        $countstime = $timestamps->groupBy(function ($timestamp) {
            return Carbon::parse($timestamp)->format('Y-m-d');
        })->map->count();
        return view('pedidos.repartidor.consulta.graficosRepartidor',compact('zona','counts','horarioo','countstime'));
    }

}