<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilesController extends Controller
{
    public function downloadFile()
{
    // path to the file
    $filePath = storage_path('app/public/contoh.pdf');

    //check if file exists
    if (!file_exists($filePath)) {
        abort(404);
    }

    // download the file
    return response()->download($filePath, 'contoh.pdf', [
        'Content-Type' => 'application/pdf',
    ]);
}

public function viewFile()
{
    // path to the file
    $filePath = storage_path('app/public/contoh.pdf');

    // check if file exists
    if (!file_exists($filePath)) {
        abort(404);
    }

    // view the file in the browser
    return response()->file($filePath, [
        'Content-Type' => 'application/pdf',
    ]);
}
}
