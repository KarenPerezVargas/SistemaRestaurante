<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zona;
use App\Models\Horarioo;
use Dompdf\Dompdf;
use Dompdf\Options;

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
        $horarioo = Horarioo::all();
        return view('pedidos.repartidor.consulta.graficosRepartidor',compact('zona','horarioo'));
    }

}