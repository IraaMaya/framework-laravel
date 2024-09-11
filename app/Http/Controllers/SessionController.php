<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

 class SessionController extends Controller
{
    // Metode untuk menyimpan data ke session
    public function storeSessionData (Request $request)
    {
        // Menyimpan ID dan nama ke dalam session
        $request->session()->put('session_data', [
        'id' => 1,
        'name' => 'Taylor Swift',
        ]);
        return redirect()->route('session.view')->with('message', 'Data telah disimpan di session!');
    }

    // Metode untuk mengambil data dari session
    public function getSessionData (Request $request)
    {
        // Mengambil ID dan nama dari session
        $data = $request->session()->get('session_data', [
        'id' => 'Data tidak ditemukan',
        'name' => 'Data tidak ditemukan',
        ]);
        return view('session-view', ['sessionData' => $data]);
    }

    // Metode untuk menghapus data dari session
    public function deleteSessionData (Request $request)
    {
        $request->session()->forget('session_data');
        return redirect()->route('session.view')->with('message', 'Data session telah dihapus!');
}
}