<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register (Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:4|confirmed',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/login')->with('status', 'Registration successful! Please login.');
    }
    public function showLoginForm()
    {
    return view('auth.login');
    }

    public function login (Request $request)
    {
    $request->validate([
    'email' => 'required|string|email|max:255', 
    'password' => 'required|string|min:8',
    ]);

    $user = User::where('email', $request->email)->first();

    if ($user && Hash::check($request->password, $user->password)) {
        // Authentication successful
        return redirect('/dashboard')->with('status', 'Login successful!');
    } else {
        // Authentication failed
        return redirect('/login')->withErrors(['email' => 'Invalid email or password.']);
        }
    }
    }
