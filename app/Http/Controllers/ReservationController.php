<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index(Request $request)
    {
        // Daftar status yang akan dicari
        $statuses = ['Pending', 'Confirmed', 'Canceled'];

        // Mengambil data reservasi berdasarkan status menggunakan whereIn
        $reservations = Reservation::whereIn('status', $statuses)->get();

        return view('reservations.index', compact('reservations'));
    }
}