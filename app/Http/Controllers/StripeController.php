<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\Venta;
use App\Models\VentaProducto;

class StripeController extends Controller
{
    public function index(){
        // return view ('layout');
        $products = Productos::all();
        return view('products', compact('products'));
    }

    public function session(Request $request)
    {
        //$user         = auth()->user();
        $productItems = [];

        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        foreach (session('cart') as $id => $details) {
            $product_name = $details['product_name'];
            $total = $details['price'];
            $quantity = $details['quantity'];

            // Convertir el precio total a un formato adecuado (por ejemplo, dos decimales)
            $total = number_format($total, 2, '.', '');

            $productItems[] = [
                'price_data' => [
                    'product_data' => [
                        'name' => $product_name,
                    ],
                    'currency'     => 'USD',
                    'unit_amount'  => $total * 100, // Multiplicar por 100 para convertir a centavos
                ],
                'quantity' => $quantity,
            ];
        }

        $checkoutSession = \Stripe\Checkout\Session::create([
            'line_items'            => [$productItems],
            'mode'                  => 'payment',
            'allow_promotion_codes' => true,
            'metadata'              => [
                'user_id' => "0001"
            ],
            'customer_email' => "user-feliz1@gmail.com", //$user->email,
            'success_url' => route('success'),
            'cancel_url'  => route('cancel'),
        ]);

        return redirect()->away($checkoutSession->url);
    }

    public function success(Request $request)
    {
        // Obtener detalles del carrito desde la sesión
        $cart = session()->get('cart', []);

        // Inicializar variables para almacenar los importes individuales y el total de la venta
        $totalVenta = 0;
        $descuento = 0;

        // Obtén el ID de la venta
        $cantidadVentas = Venta::count();
        $ventaId =  $cantidadVentas + 1;

        // Iterar sobre los productos del carrito para calcular los importes individuales
        foreach ($cart as $id => $details) {
            $producto = Productos::find($id);

            $importeProducto = $details['price'] * $details['quantity'];
            $totalVenta += $importeProducto;
        }

        // Crear una nueva instancia de Venta
        $venta = new Venta();
        $venta->cliente_id = auth()->id(); // ID del cliente autenticado
        $venta->descuento = $descuento;
        $venta->total = $totalVenta - $descuento;
        $venta->operacion_gravada = $totalVenta * 0.82;
        $venta->igv = $totalVenta * 0.18;
        $venta->total_pagar = $totalVenta - $descuento;
        $importePagado = $totalVenta - $descuento;
        $venta->importe_pagado = $importePagado;
        $venta->vuelto = $totalVenta - $importePagado;

        $venta->save();


        // Iterar sobre los productos del carrito para asociarlos a la venta
        foreach ($cart as $id => $details) {
            $producto = Productos::find($id);

            $ventaProducto = new VentaProducto([
                'venta_id' => $ventaId, // Asigna el ID de la venta aquí
                'producto_id' => $producto->id,
                'cantidad' => $details['quantity'],
                'precio_unitario' => $details['price'],
            ]);
            $ventaProducto->save();
        }

        // Limpia todo el carrito
        session()->forget('cart');

        // Redireccionar a la ruta de inicio u otra ruta deseada después del checkout exitoso
        return redirect()->route('layout');
    }

    public function cancel()
    {
        return view('cancel');
    }
}
