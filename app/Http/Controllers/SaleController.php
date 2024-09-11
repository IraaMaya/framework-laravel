<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index()
    {
        $sales = DB::table('sales')
            ->join('cars', 'sales.car_id', '=', 'cars.id')
            ->select('sales.sale_date', 'sales.price', 'cars.make', 'cars.model', 'cars.year')
            ->get();

        return view('sales.index', compact('sales'));
    }
}