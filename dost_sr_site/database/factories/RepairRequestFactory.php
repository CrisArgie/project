<?php

namespace Database\Factories;

use App\Models\Equipment;
use App\Models\Users;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RepairRequest>
 */
class RepairRequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'date_requested'                => date('Y-m-d'),
            'request_no'                    => random_int(1000, 99999),
            'description_of_property_type'  => $this->faker->paragraph,
            'location'                      => $this->faker->address,
            'acquisition_date'              => $this->faker->date,
            'acquisition_cost'              => '10000',
            'users_id'                      => Users::factory(),
            'equipment_id'                  => Equipment::factory(),
            'status'                        => 'pending',
        ];
    }
}
