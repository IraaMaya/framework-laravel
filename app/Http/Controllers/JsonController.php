<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JsonController extends Controller
{
    public function getJsonResponse()
{
    // contoh data untuk dikembalikan sebagai JSON response
    $data = [
        'name' => 'Iramaya',
        'email' => 'iramaya@gmail.com',
        'phone' => '123-456-7890',
        'address' => '123 Main St, Teyvat'
    ];

    return response()->json($data);
}

public function postJsonResponse(Request $request)
{
    // mengambil semua data input
    $inputData = $request->all();

    // contoh respons JSON dengan data yang dikirim oleh pengguna
    $response = [
        'status' => 'succes',
        'message' => 'Data received successfully',
        'data' => $inputData
    ];

    return response()->json($response);
}
}
