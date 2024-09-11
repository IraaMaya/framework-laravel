<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TokenController extends Controller 
{
    public function showForm()
    {
        return view('token.csrf');
    }

    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Kirim nama bersama dengan pesan sukses
        return redirect()->back()->with([
            'success' => 'Form submitted successfully!',
            'name' => $validated['name'],
        ]);
    }
}