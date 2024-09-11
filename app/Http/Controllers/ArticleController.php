<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function index()
    {
        $article = "Ini adalah contoh kalimat yang sangat panjang dan perlu dipotong agar tidak merusak tata letak halaman web.";
        $limitedArticle = Str::limit($article, 50, '... [selengkapnya]');

        return view('articles.index', compact('limitedArticle'));
    }
}
