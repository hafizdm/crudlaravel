<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('post', [
            "title" => "Blog",
            // "post" => Post::all()
            "post" => Post::latest()->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('pos', [
            "title" => "Single Post",
            "post" => $post
                    
        ]);
    }
}
