<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartialDataController extends Controller
{
 
    public function showForm()
{
    return view('retrieve-partial-input');
}

public function retrievePartialInput(Request $request)
{
    // mengambil sebagian data input (hanya 'name' dan 'email')
    $inputData = $request->only(['name', 'email']);
    
    return view('retrieve-partial-input', compact('inputData'));
}
}
