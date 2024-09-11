<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class VerifyController extends Controller
{
    public function showForm()
    {
        return view('verify-password');
    }

    public function verifyPassword(Request $request)
    {
        // Validasi input
        $request->validate([
            'password' => 'required'
        ]);

        // Hash password yang disimpan di database (contoh)
        $storedHashedPassword = '$2y$12$imiG04ubi/IbNdCai7jNd..EM2PC7UzmiJODO8HbGuelub.48snou'; // Contoh hash password

        // Verifikasi password
        $password = $request->input('password');
        if (Hash::check($password, $storedHashedPassword)) {
            $message = "Password is correct!";
        } else {
            $message = "Password is incorrect.";
        }

        return view('verify-password', compact('message'));
    }

    // Metode ini untuk menghasilkan hash dari password asli
    public function generateHash(Request $request)
    {
        $password = $request->input('password');
        $hashedPassword = Hash::make($password);
        return back()->with('hashedPassword', $hashedPassword);
    }
}
