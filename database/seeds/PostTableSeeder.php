<?php

use App\Category;
use App\Post;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Post::truncate();
    	Category::truncate();

    	$category = new Category;
    	$category->name = "Categoria 1";
    	$category->save();

    	$category = new Category;
    	$category->name = "Categoria 2";
    	$category->save();

        $post = new Post;
        $post->title = "Mi primer post";
        $post->excerpt = "Extracto de mi primer post";
        $post->body = "<p>Contenido de mi primer post</p>";
        $post->published_at = Carbon::now();
        $post->category_id = 1; 
        $post->save();

        $post = new Post;
        $post->title = "Mi segundo post";
        $post->excerpt = "Extracto de mi primer post";
        $post->body = "<p>Contenido de mi primer post</p>";
        $post->published_at = Carbon::now();
        $post->category_id = 2; 
        $post->save();
    }
}
