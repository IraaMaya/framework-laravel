<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RandomStringController extends Controller
{
    public function showForm()
    {
        return view('random-string');
    }

    public function generateRandomString(Request $request)
    {
        $length = $request->input('length', 16); // Default length 16
        $randomString = Str::random($length);

        return view('random-string', ['randomString' => $randomString]);
    }
}
