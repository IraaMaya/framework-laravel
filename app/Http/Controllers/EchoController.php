<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EchoController extends Controller
{
    public function showForm()
{
    return view('echo-input');
}

public function echoInput(Request $request)
{
    // mengambil data input
    $inputData = $request->only(['name', 'email', 'message']);

    return view('echo-input', compact('inputData'));
}
}

