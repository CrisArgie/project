<?php

namespace Database\Factories;

use App\Models\RepairRequest;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PreRepairInspectionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'detail_of_defects' => $this->faker->paragraph,
            'date_of_latest_repair' =>  $this->faker->date,
            'mature_of_latest_repair'   =>  $this->faker->date,
            'pre_repair_assessment_done'    => $this->faker->paragraph,
            'repair_requests_id'    =>  RepairRequest::all()->random()->id,
            'status'    =>  'in-progress',
        ];
    }
}
