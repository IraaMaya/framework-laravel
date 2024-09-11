<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CsrfController extends Controller
{
    public function showForm()
    {
        return view('csrf.form');
    }

    public function submitForm(Request $request)
    {
        // Validasi data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        // ambil data yang diinput
        $data = $request->only(['name', 'email']);

        // kirim data yang diinput kembali ke view
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}