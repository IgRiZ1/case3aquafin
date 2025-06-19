<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class AdminOrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('user')->orderByDesc('created_at')->get();
        return view('admin.orders.index', compact('orders'));
    }

    public function show($id)
    {
        $order = Order::with(['user', 'orderItems.product'])->findOrFail($id);
        return view('admin.orders.show', compact('order'));
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();
        return redirect()->route('admin.orders.index')->with('success', 'Bestelling verwijderd!');
    }

    public function markArrived($id)
    {
        $order = \App\Models\Order::findOrFail($id);
        $order->status = 'Aangekomen';
        $order->save();
        return redirect()->route('admin.orders.index')->with('success', 'Bestelling gemarkeerd als aangekomen!');
    }
}
