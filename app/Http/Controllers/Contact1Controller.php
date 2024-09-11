<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class Contact1Controller extends Controller
{
    public function index()
    {
        // mengambil daftar nilai dari kolom 'name'
        $names = Contact::pluck('name');
        return view('contacts.index', compact('names'));
    }
}
