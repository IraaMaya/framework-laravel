<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function showForm()
    {
        return view('upload-file');
    }

    public function uploadFile(Request $request)
    {
        // Validasi file yang diunggah
        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png,pdf|max:2048', // contoh validasi
        ]);

        // Mengambil file yang diunggah
        $file = $request->file('file');

        // Menyimpan file ke dalam folder 'uploads'
        $filePath = $file->store('uploads', 'public');

        return back()->with('success', 'File uploaded successfully.')->with('file', $filePath);
    }
}
