<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IfStatementController extends Controller
{
    public function showForm()
{
    return view('if-statement');
}

public function processForm(Request $request)
{

    $inputValue = $request->input('input_value');

    if ($inputValue === 'yes') {
        $message = "You entered 'yes'.";
    } elseif ($inputValue === 'no') {
        $message = "You entered 'no'.";
    } else {
        $message = "You entered something else.";
    }

    return view('if-statement', compact('message'));
}
}