<?php

namespace Database\Factories;

use App\Models\Documents;
use App\Models\Equipment;
use App\Models\IctForms;
use App\Models\Images;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\IctRequest>
 */
class IctRequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $ictId = IctForms::all()->random()->id;
        $eqptId = Equipment::all()->random()->id;

        if($ictId != null && $eqptId != null){
            return [
                'ict_form_id' => $ictId,
                'equipment_id' => $eqptId,
            ];
        }
    }
}
