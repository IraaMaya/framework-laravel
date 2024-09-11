<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Series;

class SeriesController extends Controller
{
    public function index()
    {
        $series = Series::skip(1)->take(10)->get(); // Mengambil 10 series, melewati 10 series pertama
        return view('series.index', compact('series'));
    }
}