<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Cliente;
use Dompdf\Dompdf;
use Dompdf\Options;

class GraficosPedidoController extends Controller
{
    const PAGINATION = 5;
    public function boletas(Request $request)
    {
        $buscarpor = $request->get('buscarpor');
        $pedido = Pedido::where('estado','=','2')->where('descripcion','like','%'.$buscarpor.'%')->paginate($this::PAGINATION);
        return view('pedidos.personalPedidos.consulta.boletas',compact('pedido','buscarpor'));
    }

    public function boletaGenerada($id)
    {
        $cliente=Cliente::findOrFail($id);
        $pedido = Pedido::findOrFail($id);
        return view('pedidos.personalPedidos.consulta.boletaGenerada', compact('pedido','cliente'));
    }

    public function generarBoletaPDF($id)
    {
        $cliente = Cliente::findOrFail($id);
        $pedido = Pedido::findOrFail($id);

        $html = view('pedidos.personalPedidos.consulta.generarBoletaPDF', compact('pedido', 'cliente'))->render();

        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);

        $dompdf->render();

        $dompdf->stream("boleta_de_pago.pdf", array("Attachment" => false));
    }

    public function reportePedidos(Request $request)
    {
        // $buscarpor = $request->get('buscarpor');
        // $pedido = Pedido::where('estado','=','1')->where('descripcion','like','%'.$buscarpor.'%')->paginate($this::PAGINATION);

        $pedido = Pedido::all();

        $html = view('pedidos.personalPedidos.consulta.reportePedidos', compact('pedido'))->render();
        // $pedido = Pedido::where('estado','=','2')->where('descripcion','like','%'.$buscarpor.'%')->paginate($this::PAGINATION);

        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);

        $dompdf->render();

        $dompdf->stream("Pedidos.pdf", array("Attachment" => false));
    }

    public function graficos(Request $request)
    {
        $cliente = Cliente::all();
        $pedido = Pedido::all();
        return view('pedidos.personalPedidos.consulta.graficos',compact('cliente','pedido'));
    }

}
