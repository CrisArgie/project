<?php

namespace Database\Factories;

use App\Models\PreRepairInspections;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostRepairInspectionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'repair_shop'  => $this->faker->title,
            'repair_shop_date'  => $this->faker->date,
            'invoice_no'  => random_int(10000, 999999),
            'job_order_no'  => random_int(1000, 99999),
            'job_order_date'  => $this->faker->date,
            'amt_no'  => random_int(10000, 999999),
            'payable_account'  => random_int(10000, 999999),
            'recommendation'  => $this->faker->paragraph,
            'pre_repair_inspections_id'  => PreRepairInspections::all()->random()->id,
            'status'  => 'in-progress',
        ];
    }
}
