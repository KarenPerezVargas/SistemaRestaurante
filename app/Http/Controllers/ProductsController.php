<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Productos; 
  
class ProductsController extends Controller
{
    public function index()
    {
        $products = Productos::all();
        return view('products', compact('products'));
    }
  
    public function cart()
    {
        return view('cart');
    }
    public function addToCart($id)
    {
        $product = Productos::findOrFail($id);
        $cart = session()->get('cart', []);
  
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        }  else {
            $cart[$id] = [
                "product_name" => $product->producto_nombre,
                "category" => $product->producto_categoria,
                "price" => $product->producto_precio,
                "quantity" => 1
            ];
        }
  
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Producto agregado al carro satisfactoriamente');
    }
  
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Carta subida satisfactoriamente!');
        }
    }
  
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Producto eliminado satisfactoriamente!');
        }
    }
}