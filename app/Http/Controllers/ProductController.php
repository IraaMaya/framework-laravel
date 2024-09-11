<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
{
    $products = [
        ['name' => 'Keychain', 'price' => 100, 'description' => 'Provides several Genshin Impact characters'],
        ['name' => 'Case', 'price' => 200, 'description' => 'Provides for several types of cellphones'],
        ['name' => 'Headset', 'price' => 300, 'description' => 'Provides several Bluetooth headsets'],
    ];

    return view('product', ['products' => $products]);
}
}
