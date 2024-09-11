<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StringController extends Controller
{
    public function index()
    {
        return view('string.index');
    }

    public function check(Request $request)
    {
        $string = $request->input('string');
        $substring = $request->input('substring');

        $contains = Str::contains($string, $substring);

        return view('string.result', compact('string', 'substring', 'contains'));
    }
}