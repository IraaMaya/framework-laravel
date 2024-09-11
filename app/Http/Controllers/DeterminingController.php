<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeterminingController extends Controller
{
    public function showForm()
{
    return view('check.datermining');
}

public function checkInput(Request $request)
{
    $request->validate([
        'input_value' => 'required'
    ]);

    $inputValue = $request->input('input_value');
    $message = $inputValue ? "Input value is present: $inputValue" : "Input value is not present";

    return view('check.input', compact('message'));
}
}
