<?php

namespace Database\Factories;

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
        $sentence1 = 'none';
        if($varId == '3') {
            $sentence1 = $this->faker->sentence;
        }else ;
        return [
            'user_id' => Users::all()->random()->id,
            'type_of_request_id' => $varId,
            'type_request_description' => $sentence1,
            'status'                    => 'in-progress',
        ];
    }
}
