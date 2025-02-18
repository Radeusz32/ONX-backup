<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $categories = Category::factory(5)->create();
        Post::factory(10)->create()->each(function ($post) use ($categories) {
            $post->categories()->attach($categories->random(2));
        });
    }
}
