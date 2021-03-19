<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserTablesFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = User::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'email' => 'root@mykonos.ch',
      'name' => 'Mykonos',
      'firstname' => 'Administrator',
      'password' => Hash::make('Realise001'),
      'avatar' => $this->faker->image('public/assets/img'),
      'address' => $this->faker->address,
      'phone' => $this->faker->phoneNumber,
      'birth_date' => $this->faker->dateTime()->format('d/m/Y')
    ];
  }
}
