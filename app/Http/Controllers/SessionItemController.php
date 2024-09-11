<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionItemController extends Controller
{
    public function setSession(Request $request)
    {
        // Menyimpan data ke dalam session
        $request->session()->put('key', 'This is a session data.');
        return redirect()->route('check.session')->with('status', 'Data has been set in the session!');
    }

    public function checkSession(Request $request)
    {
        // Memeriksa apakah item ada di session
        $sessionHasItem = $request->session()->has('key');
        return view('check-session', compact('sessionHasItem'));
    }
}