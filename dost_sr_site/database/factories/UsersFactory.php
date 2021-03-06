<?php

namespace Database\Factories;

use App\Models\Divisions;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Users>
 */
class UsersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_type'     => 'customer',
            'first_name'    => $this->faker->firstName(),
            'last_name'     => $this->faker->lastName(),
            'email'         => $this->faker->unique()->email,
            'password'      => $this->faker->password(),
            'divisions_id'  => Divisions::all()->random()->id,
        ];
    }
}
