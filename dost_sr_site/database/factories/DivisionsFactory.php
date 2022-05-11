<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Divisions>
 */
class DivisionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'division_number'   => random_int(10, 99999),
            'division_name'     => $this->faker->sentence,
            'division_address'  => $this->faker->address,
        ];
    }
}
