<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function index(Request $request)
    {
        $orderBy = $request->input('order_by', 'title');
        $music = Music::orderBy($orderBy)->get();

        return view('music.index', compact('music'));
    }
}

