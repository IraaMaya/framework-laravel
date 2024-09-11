<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswiController extends Controller
{
    public function getNama($nama)
    {
        return $nama;
    }

    public function form()
    {
        return view('form');
    }

    public function hasil(Request $request)
    {
        $nama = $request->nama;
        $kelas = $request->kelas;
        $jurusan = $request->jurusan;

        return 'Nama : '.$nama.', Kelas : '.$kelas.', Jurusan :'.$jurusan; 
    }
}