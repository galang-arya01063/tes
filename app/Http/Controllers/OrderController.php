<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all(); // Fetch semua data dari tabel order
        return view('order.index', compact('orders')); // Updated view to order.index
    }
}
