<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;

class CartController extends Controller
{
    public function addToCart(Request $request, $productId)
    {
        Cart::create([
            'user_id' => auth()->id(),
            'product_id' => $productId,
            'quantity' => $request->quantity,
            'location' => $request->location
        ]);
        
        return redirect()->back()->with('success', 'Product toegevoegd aan winkelwagen');
    }

    public function showCart()
    {
        $cartItems = Cart::with('product')->where('user_id', auth()->id())->get();
        return view('producten.cart', compact('cartItems'));
    }

    public function removeFromCart($id)
    {
        Cart::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Product verwijderd uit winkelwagen');
    }

    public function order()
    {
        $user = auth()->user();
        $cartItems = Cart::with('product')->where('user_id', $user->id)->get();
        if ($cartItems->isEmpty()) {
            return redirect()->back()->with('error', 'Je winkelmandje is leeg.');
        }
        // Maak een nieuwe order aan
        $order = Order::create([
            'user_id' => $user->id,
            'status' => 'In proces',
        ]);
        // Voeg alle cart items toe als order items
        foreach ($cartItems as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item->product_id,
                'quantity' => $item->quantity,
            ]);
        }
        // Leeg de cart
        Cart::where('user_id', $user->id)->delete();
        return redirect()->route('cart.confirmation')->with('success', 'Bestelling geplaatst!');
    }
} 