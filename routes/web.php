<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { //rute pertama untuk meng akses website
    return view('home', [
        "title" => "Home"
    ]); 
});

Route::get('/about', function () { //rute pertama untuk meng akses website
    return view('about', [
        "title" => "About",
        "name" => "Hafizd Muhammad",
        "email" => "hafidz@rapidinfrastruktur.com",
        "image" => "img/hafizd.jpg"

    ]);
});

Route::get('/blog', [PostController::class, 'index']); //-> Perintah untuk memanggil data dari controller (PostController)



Route::get('/join-us', function () { //nama halaman rute pertama untuk meng akses website
    return view('join', [ //-> redirect ke file views/join.blade.php
        "title" => "Join Us!"
    ]);
});


//ini halaman single employee

Route::get('post/{post:slug}', [PostController::class, 'show']); //-> Perintah untuk memanggil data single post dari controller (PostController)
//Perintah slug diatas terhubung dengan perintah di post.blade.php

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});

