<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all(); // mengambil semua baris dari tabel categories
        return view('categories.index', compact('categories'));
    }
}
