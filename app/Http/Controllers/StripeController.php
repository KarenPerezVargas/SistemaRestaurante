<?php 
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Productos; 
 
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
            'customer_email' => "cairocoders-ednalan@gmail.com", //$user->email,
            'success_url' => route('success'),
            'cancel_url'  => route('cancel'),
        ]);
     
        return redirect()->away($checkoutSession->url);
    }
 
    public function success()
    {
        // Limpia todo el carrito
        session()->forget('cart');

        // Opcionalmente, puedes recrear el carrito vacío si es necesario
        // session()->put('cart', []);

        session()->flash('success', 'Carrito limpiado satisfactoriamente!');

        $products = Productos::all();
        return view('products', compact('products'));
    }
 
    public function cancel()
    {
        return view('cancel');
    }
}