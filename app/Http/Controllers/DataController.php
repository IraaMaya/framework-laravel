<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function showForm() 
    {
         return view('retrieve') ;
}

     public function retrieveInput(Request $request) 
{ 

        // mengambil semua data input
        $inputData = $request->all() ;

        return view ('retrieve', compact('inputData')) ;
    }
}

