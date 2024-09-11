<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index(Request $request)
    {
        $query = Film::query();

        if ($request->has('genre')) {
            $query->where('genre', $request->input('genre'));
        }

        if ($request->has('release_year')) {
            $query->where('release_year', $request->input('release_year'));
        }

        $films = $query->get();

        return view('films.index', compact('films'));
    }
}