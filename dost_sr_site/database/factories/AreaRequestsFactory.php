<?php

namespace Database\Factories;

use App\Models\AreaOfRequests;
use App\Models\IctForms;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AreaRequests>
 */
class AreaRequestsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $areaId = AreaOfRequests::all()->random()->id;
        $ictId = IctForms::all()->random()->id;
        if( $areaId == 12 || $areaId == 13 || $areaId == 14 )
        {
            $hasArea = $this->faker->paragraph;
        } else { $hasArea = ''; }
        return [
            'ict_forms_id'           => $ictId,
            'area_of_requests_id'    => $areaId,
            'has_description'       => $hasArea,
        ];
    }
}
