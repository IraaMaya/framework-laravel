<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnescapedController extends Controller
{
    public function showForm()
{
    return view('display-unescaped');
}

public function displayUnescapedData(Request $request)
{
    // mengambil data input
    $rawHtml = $request->input('raw_html');

    return view('display-unescaped', compact('rawHtml'));
}
}

