<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index()
    {
        // Mendapatkan nilai session array atau membuat array kosong
        $items = session()->get('items', []);
        return view('list.index', compact('items'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'item' => 'required|string|max:255',
        ]);

        // Mendapatkan nilai session array atau membuat array kosong
        $items = session()->get('items', []);
        // Menambahkan item baru ke array
        $items[] = $request->input('item');
        // Menyimpan kembali ke session
        session()->put('items', $items);

        return redirect()->route('list.index');
    }
}