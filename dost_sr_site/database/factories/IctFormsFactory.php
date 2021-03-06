<?php

namespace Database\Factories;

use App\Models\Equipment;
use App\Models\TypeOfRequests;
use App\Models\Users;
use Illuminate\Database\Eloquent\Factories\Factory;

use function PHPSTORM_META\type;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ict_forms>
 */
class IctFormsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $varId = TypeOfRequests::all()->random()->id;
        $eqptId = Equipment::all()->random()->id;

        $sentence1 = 'none';
        if($varId == '3') {
            $sentence1 = $this->faker->sentence;
        }else ;
        return [
            'date_requested' => $this->faker->dateTime,
            'request_no' => random_int(1000, 99999),
            'users_id' => Users::all()->random()->id,
            'type_of_requests_id' => $varId,
            'type_request_description' => $sentence1,
            'equipment_id' => $eqptId,
            'status' => 'pending',
        ];
    }
}
