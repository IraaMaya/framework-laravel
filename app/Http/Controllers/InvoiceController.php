<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{
    public function index()
    {
        // Menggunakan Raw Expression untuk menghitung total_amount dari semua invoices
        $totalAmount = DB::table('invoices')
                         ->select(DB::raw('SUM(total_amount) as total'))
                         ->pluck('total')
                         ->first();

        $invoices = Invoice::all();
        return view('invoices.index', compact('invoices', 'totalAmount'));
    }
}