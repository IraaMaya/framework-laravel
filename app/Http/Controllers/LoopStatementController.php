<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoopStatementController extends Controller
{
    public function showLoops()
{
    // data statis untuk di-loop
    $daysOfWeek = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

    return view('loops', compact('daysOfWeek'));
}
}

