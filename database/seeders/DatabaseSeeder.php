<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       

        // User::create([
        //     'name' => 'Hafizd Muhammad',
        //     'email' => 'hafizdmuhammad1996@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        
        // User::create([
        //     'name' => 'Alif Anugrah',
        //     'email' => 'alif.anugrah@rapidinfrastruktur.com',
        //     'password' => bcrypt('12345')
        // ]);


        User::factory(3)->create();

        Category::create([
            'name' => 'Project Pertama',
            'slug' => 'project-pertama'
        ]);

        Category::create([
            'name' => 'Project Kedua',
            'slug' => 'project-kedua'
        ]);

        Post::factory(5)->create();


        // Post::create([
        //     'title' => 'Project Tangguh',
        //     'slug' => 'project-tangguh',
        //     'excerpt' => 'Project tangguh merupakan project berlokasi di teluk bintuni papua',
        //     'body' => 'Rapid Infrastruktur sudah menangani project Tangguh ini selama 2 tahun, dan project ini bergerak dibidang man power supply. Project tangguh ini dimiliki oleh British Petrolium dan rapid dipercaya sebagai subcontractor dari CSTS.',
        //     'category_id' => '1',
        //     'user_id' => '1'
        // ]);

        // Post::create([
        //     'title' => 'Project Aquatech',
        //     'slug' => 'project-aquatech',
        //     'excerpt' => 'Project aquatech merupakan project berlokasi di Surabaya',
        //     'body' => 'Rapid Infrastruktur sudah menangani project aquatech ini selama 2 tahun, dan project ini bergerak dibidang procurement. Project Aquatech ini bergerak dibidang pabrik pembuatan air',
        //     'category_id' => '1',
        //     'user_id' => '2'
        // ]);

        // Post::create([
        //     'title' => 'Project Bojonegoro',
        //     'slug' => 'project-bojonegoro',
        //     'excerpt' => 'Project JTB merupakan project berlokasi di Bojonegoro',
        //     'body' => 'Rapid Infrastruktur sudah menangani project JTB ini selama 3 tahun, dan project ini bergerak dibidang man power supply. Project JTB ini dimiliki berkolaborasi dengan pemda Bojonegoro',
        //     'category_id' => '2',
        //     'user_id' => '2'
        // ]);
        
        // Post::create([
        //     'title' => 'Project Sumba',
        //     'slug' => 'project-sumba',
        //     'excerpt' => 'Project MSM sumba merupakan project berlokasi di Sumba',
        //     'body' => 'Rapid Infrastruktur sudah menangani project MSM ini selama 3 tahun, dan project ini bergerak dibidang man power supply pembangunan pabrik gula. Project MSM ini dimiliki oleh PT. Djarum',
        //     'category_id' => '2',
        //     'user_id' => '1'
        // ]);



    }
}
