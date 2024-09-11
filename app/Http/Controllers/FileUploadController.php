<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    public function showForm()
    {
        return view('upload-files');
    }

    public function uploadFile(Request $request)
    {
        // Validasi file yang diunggah
        $request->validate([
            'file' => 'required|mimes:jpg,png,jpeg,gif|max:2048',
        ]);

        // Mendapatkan file dari request
        $file = $request->file('file');

        // Menentukan nama file unik
        $fileName = time() . '_' . $file->getClientOriginalName();

        // Menyimpan file ke direktori storage/app/public/uploads
        $file->storeAs('public/uploads', $fileName);

        // Mengembalikan response sukses
        return back()->with('success', 'File has been uploaded successfully.')->with('file', $fileName);
    }
}