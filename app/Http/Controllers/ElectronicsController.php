<?php

namespace App\Http\Controllers;

use App\Models\Electronics;
use Illuminate\Http\Request;

class ElectronicsController extends Controller
{
    public function index()
    {
        // Mengambil 5 data terakhir
        $electronics = Electronics::orderBy('created_at', 'desc')->take(5)->get();
        return view('electronics.index', compact('electronics'));
    }
}