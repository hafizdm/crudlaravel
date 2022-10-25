<?php

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

Route::get('/blog', function () { //rute pertama untuk meng akses website

        $blog_post = [

            [
                "title" => "Employee 1",
                "slug" => "employee-1",
                "author" => "Hafizd Muhammad",
                "body" => "Hallo saya Hafizd Muhammad, IT Specialist Rapid Infrastruktur Indonesia"
            ],
        
            [
                "title" => "Employee 2",
                "slug" => "employee-2",
                "author" => "Jevinna",
                "body" => "Hallo saya Jevinna Euginia, Human Capital Rapid Infrastruktur Indonesia"
            ],
        
        
        ];

    return view('post', [
        "title" => "Blog",
        "post" => $blog_post
    ]);
});



Route::get('/join-us', function () { //nama halaman rute pertama untuk meng akses website
    return view('join', [ //-> redirect ke file views/join.blade.php
        "title" => "Join Us!"
    ]);
});


//ini halaman single employee

Route::get('post/{slug}', function($slug){

    $blog_post = [

        [
            "title" => "Employee 1",
            "slug" => "employee-1",
            "author" => "Hafizd Muhammad",
            "body" => "Hallo saya Hafizd Muhammad, IT Specialist Rapid Infrastruktur Indonesia"
        ],
    
        [
            "title" => "Employee 2",
            "slug" => "employee-2",
            "author" => "Jevinna",
            "body" => "Hallo saya Jevinna Euginia, Human Capital Rapid Infrastruktur Indonesia"
        ]
    
    
    ];

    $new_post = [];
    foreach ($blog_post as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }


    return view('pos', [
        "title" => "Single Post",
        "post" => $new_post
                
    ]);
});


