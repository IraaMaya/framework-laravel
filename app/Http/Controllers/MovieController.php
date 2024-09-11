<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index(Request $request)
    {
        $query = Movie::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where(function ($query) use ($search) {
                $query->where('title', 'LIKE', "%{$search}%")
                      ->orWhere('director', 'LIKE', "%{$search}%")
                      ->orWhere('release_year', $search);
            });
        }

        $movies = $query->get();

        return view('movies.index', compact('movies'));
    }
}