<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
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
      'email' => $this->faker->email,
      'name' => $this->faker->lastName(),
      'firstname' => $this->faker->firstName(),
      'password' => $this->faker->sha256,
      'avatar' => $this->faker->image(public_path() . '/assets/img'),
      'address' => $this->faker->address,
      'phone' => $this->faker->phoneNumber,
      'birth_date' => $this->faker->dateTime()->format('d/m/Y')
    ];
  }
}
