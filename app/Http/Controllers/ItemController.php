<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        // Daftar ID yang akan dihindari
        $excludedIds = [1, 2, 3]; // Contoh ID yang ingin dihindari

        // Mengambil data yang tidak ada dalam daftar ID yang diberikan
        $items = Item::whereNotIn('id', $excludedIds)->get();

        return view('items.index', compact('items'));
    }
}