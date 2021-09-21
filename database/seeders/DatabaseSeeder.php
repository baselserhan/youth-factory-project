<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Image;
use App\Models\Post;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        // Product::factory(10)->create();
        // Category::factory(10)->create();
        // Post::factory(10)->create();
        // Comment::factory(10)->create();
        // Image::factory(10)->create();
        // Slider::factory(5)->create();
        // Testimonial::factory(3)->create();
        Team::factory(3)->create();
    }
}
