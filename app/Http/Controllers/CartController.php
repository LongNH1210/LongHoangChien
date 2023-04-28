<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function viewCart() {
        $cart = session()->get('cart', []);
        return view('view_cart', compact('cart'));
    }

    public function addToCart($product_id) {
        $product = Product::findOrFail($product_id);
        $cart = session()->get('cart', []);
        if(isset($cart[$product->product_id])) {
            $cart[$product->product_id]['product_quantity']++;
        } else {
            $cart[$product->product_id] = [
                'product_name' => $product->product_name,
                'product_price' => $product->product_price,
                'product_quantity' => 1
            ];
            // array_push($cartItems, $newItem);
        }
        session()->put('cart', $cart);
        // session()->forget('cart');
        return redirect()->back()->with('Success', 'Add to cart');
    }

    public function deleteCartItem($product_id) {
        $cart = session()->get('cart', []);
        unset($cart[$product_id]);
        session()->put('cart', $cart);
        return redirect()->back()->with('Success', 'Item Removed');
    }
    public function checkout(){
        $cart = session()->get('cart', []);
        session()->forget('cart');
        return redirect()->back()->with('Success','Checked out');
    }
}

