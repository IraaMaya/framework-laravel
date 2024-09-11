<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showForm()
    {
        return view('page');
    }

    public function submitForm (Request $request)
    {
            // Proses validasi dan penyimpanan data di sini
            $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'address' => 'required',
            'message' => 'required'
        ]);

        // Redirect ke method success dengan data flash message
        return redirect()->action([PageController::class, 'success'])->with('status', 'Form submitted successfully!');
    }

    public function success()
    {
        return view('success');
    }
}