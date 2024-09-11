<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function index()
{
    $payments = DB::table('payments')
        ->select(DB::raw('SUM(amount) as total_amount'), DB::raw('MONTH(payment_date) as month'))
        ->groupBy(DB::raw('MONTH(payment_date)'))
        ->having(DB::raw('SUM(amount)'), '>', 500) // Mengurangi batas untuk memastikan output
        ->get();

    return view('payments.index', compact('payments'));
}


}
