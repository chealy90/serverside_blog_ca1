<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        // \App\Models\User::factory(10)->create();
        Post::create([
            'title' => "Test 1",
            'slug' => "test",
            'description' => "This is a description for test 1",
            'image_path' => "https://ih1.redbubble.net/image.2595320116.9420/flat,750x,075,f-pad,750x1000,f8f8f8.jpg",
            'user_id' => 1
        ]);


        Post::create([
            'title' => "Test 2",
            'slug' => "test",
            'description' => "This is a description for test 2",
            'image_path' => "https://ih1.redbubble.net/image.2595320116.9420/flat,750x,075,f-pad,750x1000,f8f8f8.jpg",
            'user_id' => 1
        ]);

        Post::create([
            'title' => "Test 1",
            'slug' => "test",
            'description' => "This is a description for test 1",
            'image_path' => "https://ih1.redbubble.net/image.2595320116.9420/flat,750x,075,f-pad,750x1000,f8f8f8.jpg",
            'user_id' => 1
        ]);
    }
}
