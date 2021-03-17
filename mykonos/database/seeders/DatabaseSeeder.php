<?php

namespace Database\Seeders;

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

    $users = \App\Models\User::factory(10)->create();


    $posts = \App\Models\Post::factory(10)->make()
      ->each(function ($post) use ($users) {
        $post->user_id = $users->random()->id;
        $post->save();
      });

    $taxonomies = \App\Models\Taxonomy::factory(10)->create()

      ->each(function ($taxonomy) use ($posts) {
        $taxonomy->posts()->attach([$posts->random()->id]);
      });

    $comments = \App\Models\Comment::factory(10)->make()
      ->each(function ($comment) use ($posts, $users) {
        $comment->post_id = $posts->random()->id;
        $comment->user_id = $users->random()->id;
        $comment->save();
      });





    $likes = \App\Models\Like::factory(10)->make()
      ->each(function ($like) use ($posts, $users) {
        $like->post_id = $posts->random()->id;
        $like->user_id = $users->random()->id;
        $like->save();
      });
  }
}
