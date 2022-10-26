<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post 
{
    private static $blog_post = [

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

    public static function all()

    {
        return collect(self::$blog_post); //-> perintah ini untuk memanggil data static di $blog_post
    }

    public static function find($slug)

    {
        $post = static::all(); //-> perintah ini merupakan perintah untuk memanggil data dalam bentuk static
        return $post->firstWhere('slug', $slug); //-> perintah untuk memanggil postingan sesuai dengan slug ke pos.blade.php

    }

    


}
