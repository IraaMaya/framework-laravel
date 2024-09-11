<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    // Method untuk menampilkan item dari sesi
    public function index(Request $request)
    {
        $item = $request->session()->get('cartItem');
        return view('cart.index', compact('item'));
    }

    // Method untuk menambahkan item ke sesi
    public function store(Request $request)
    {
        $request->session()->put('cartItem', $request->input('item'));
        return redirect()->route('cart.index')->with('success', 'Item added to cart!');
    }

    // Method untuk menghapus item dari sesi
    public function destroy(Request $request)
    {
        $request->session()->forget('cartItem');
        return redirect()->route('cart.index')->with('success', 'Item removed from cart!');
    }
}