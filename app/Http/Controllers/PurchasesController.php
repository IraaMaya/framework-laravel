<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PurchasesController extends Controller
{
    public function index()
    {
        $startOfYear = Carbon::now()->startOfYear()->toDateString();
        $endOfYear = Carbon::now()->endOfYear()->toDateString();

        $purchases = DB::table('purchases')
            ->select('customer_id', DB::raw('SUM(purchase_amount) as total_amount'))
            ->whereBetween('purchase_date', [$startOfYear, $endOfYear])
            ->groupBy('customer_id')
            ->get();

        return view('purchases.index', ['purchases' => $purchases]);
    }
}

