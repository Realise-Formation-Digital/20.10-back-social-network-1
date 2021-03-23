<?php

namespace Database\Seeders;


use Faker\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $faker = Factory::create(config('app.faker_locale'));
    DB::table('users')->insert([
      'email' => 'root@mykonos.ch',
      'name' => 'Mykonos',
      'firstname' => 'Administrator',
      'password' => Hash::make('Realise001'),
      'avatar' => $faker->image('public/assets/img'),
      'address' => $faker->address,
      'phone' => $faker->phoneNumber,
      'birth_date' => $faker->dateTime()->format('d/m/Y'),
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

    ]);
  }
}
