<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ShopController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('shop.index', compact('products'));
    }

    public function addToCart($id) {
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Added to cart!');
    }

    public function cart() {
        return view('shop.cart');
    }
    
    public function checkout() {
        session()->forget('cart');
        return redirect('/')->with('success', 'Order placed successfully!');
    }
}