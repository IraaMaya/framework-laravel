<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rental;

class RentalController extends Controller
{
    public function index(Request $request)
    {
        // Ambil rentang tanggal dari request atau gunakan nilai default
        $startDate = '2023-01-01';
        $endDate = '2023-12-31';

        // Ambil data rental yang tidak berada dalam rentang tanggal
        $rentals = Rental::whereNotBetween('rental_date', [$startDate, $endDate])->get();

        return view('rentals.index', compact('rentals'));
    }
}