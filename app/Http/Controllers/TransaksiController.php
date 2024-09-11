<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function index()
    {
        // Mengelompokkan transaksi berdasarkan jenis_barang dan menghitung total jumlah per kelompok
        $transaksi = Transaksi::select('jenis_barang', DB::raw('SUM(jumlah) as total_jumlah'))
                              ->groupBy('jenis_barang')
                              ->get();

        return view('transaksi.index', compact('transaksi'));
    }
}