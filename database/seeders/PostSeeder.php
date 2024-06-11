<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\posts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    // $post =  new posts;
    // $post->title = 'My first post';
    // $post->content = 'This is my first post';
    // $post->categoria = "category 1 ";
    // $post->published_at = now();
    // $post->save();

    // $post =  new posts;
    // $post->title = 'My second post';
    // $post->content = 'This is my second post';
    // $post->categoria = "category 2 ";
    // $post->published_at = now();
    // $post->save();


            Post::factory(50)->create();



    }
}
