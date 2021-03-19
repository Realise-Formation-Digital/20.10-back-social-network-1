<?php

namespace Database\Seeders;

use App\Models\Like;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use App\Models\Taxonomy;
use Illuminate\Database\Seeder;

use Illuminate\Filesystem\Filesystem;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    $this->call(UsersTableSeeder::class);
    $file = new Filesystem;
    $file->cleanDirectory('public/assets/img');

    $users = User::factory(9)->create();


    $posts = Post::factory(10)->make()
      ->each(function ($post) use ($users) {
        $post->user_id = $users->random()->id;
        $post->save();
      });

    Taxonomy::factory(10)->create()

      ->each(function ($taxonomy) use ($posts) {
        $taxonomy->posts()->attach([$posts->random()->id]);
      });

    Comment::factory(10)->make()
      ->each(function ($comment) use ($posts, $users) {
        $comment->post_id = $posts->random()->id;
        $comment->user_id = $users->random()->id;
        $comment->save();
      });

    Like::factory(10)->make()
      ->each(function ($like) use ($posts, $users) {
        $like->post_id = $posts->random()->id;
        $like->user_id = $users->random()->id;
        $like->save();
      });
  }
}
