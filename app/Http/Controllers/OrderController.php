<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        // Menghitung total harga semua pesanan
        $totalRevenue = Order::sum('total_price');

        // Mengirimkan data ke view
        return view('order.index', compact('totalRevenue'));
    }
}