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
            "post" => Post::all()
        ]);
    }

    public function show($slug)
    {
        return view('pos', [
            "title" => "Single Post",
            "post" => Post::find($slug)
                    
        ]);
    }
}
