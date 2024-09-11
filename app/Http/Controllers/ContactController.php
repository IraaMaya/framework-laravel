<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('uri.contact');
    }
    public function hasil(Request $request)
    {
        //method all()
        $input = $request->all();
        echo 'Semua Data : ';
        print_r($input);
        echo '<br>';
        //method input()
        $name = $request->input('name');
        echo 'Nama : '. $name;
        echo '<br>';
        //method  get()
        $email = $request->get('email');
        echo 'Email : '. $email; 
        echo '<br>';
        //mengambil value field address
        $address = $request->address;
        echo 'Alamat : '. $address;
        echo '<br>';
        exit;
    }
}