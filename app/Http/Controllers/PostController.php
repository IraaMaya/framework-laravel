<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::leftJoin('authors', 'posts.author_id', '=', 'authors.id')
                    ->select('posts.*', 'authors.name as author_name', 'authors.email as author_email')
                    ->get();

        return view('posts.index', compact('posts'));
    }
}
