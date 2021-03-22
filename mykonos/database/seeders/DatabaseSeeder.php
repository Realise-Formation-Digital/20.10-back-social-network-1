<?php

namespace Database\Seeders;

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
    $file = new Filesystem;
    $file->cleanDirectory('public/assets/img');
    $this->call(UsersTableSeeder::class);
    $this->call(FakerSeeder::class);
  }
}
