<?php

namespace Database\Seeders;

use App\Models\Like;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use App\Models\Taxonomy;
use Illuminate\Database\Seeder;

class FakerSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $users = User::factory(23)->create();

    $posts = Post::factory(24)->make()
      ->each(function ($post) use ($users) {
        $post->user_id = $users->random()->id;
        $post->save();
      });

    Taxonomy::factory(24)->create()
      ->each(function ($taxonomy) use ($posts) {
        $taxonomy->posts()->attach(
          $posts->random(rand(1, 8))->pluck('id')->toArray()
        );
      });

    Comment::factory(24)->make()
      ->each(function ($comment) use ($posts, $users) {
        $comment->post_id = $posts->random()->id;
        $comment->user_id = $users->random()->id;
        $comment->save();
      });

    Like::factory(48)->make()
      ->each(function ($like) use ($posts, $users) {
        $like->post_id = $posts->random()->id;
        $like->user_id = $users->random()->id;
        $like->save();
      });
  }
}
