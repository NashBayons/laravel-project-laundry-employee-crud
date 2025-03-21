<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
{
    $orders = Order::all(); // Fetch all orders from the database
    return view('orders.index', compact('orders'));
}

    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request)
    {
        // Validate and store the order
        $request->validate([
            'order_name' => 'required',
            'weight' => 'required|numeric',
            'date' => 'required|date',
            'service_type' => 'required',
        ]);

        Order::create($request->all());

        return redirect()->route('orders.index')->with('success', 'Order created successfully.');
    }

    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }

    public function edit(Order $order)
    {
        return view('orders.edit', compact('order'));
    }

    public function update(Request $request, Order $order)
    {
        // Validate and update the order
        $request->validate([
            'order_name' => 'required',
            'weight' => 'required|numeric',
            'date' => 'required|date',
            'service_type' => 'required',
        ]);

        $order->update($request->all());

        return redirect()->route('orders.index')->with('success', 'Order updated successfully.');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index')->with('success', 'Order deleted successfully.');
    }
}