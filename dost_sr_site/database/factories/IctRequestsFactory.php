<?php

namespace Database\Factories;

use App\Models\Equipment;
use App\Models\IctForms;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\IctRequests>
 */
class IctRequestsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $ictId = IctForms::all()->random()->id;

        if($ictId != null){
            return [
                'ict_forms_id' => $ictId,
            ];
        }
    }
}
