<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SharingController extends Controller
{
    public function index()
{
        return view('selamat-datang');
}

public function about()
{
    return view('about');
}
}