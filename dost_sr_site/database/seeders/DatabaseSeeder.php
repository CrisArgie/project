<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Area_of_requests;
use App\Models\Divisions;
use App\Models\Equipment;
use App\Models\IctForms;
use App\Models\IctRequest;
use App\Models\Type_of_requests;
use App\Models\Users;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Users::truncate();
        Area_of_requests::truncate();
        Type_of_requests::truncate();
        Divisions::truncate();

        // Divisions::create([
        //     'division_number'   => '1',
        //     'division_name'     => '1st Division',
        //     'division_address'  => 'Brgy X, x City, XXXX'
        // ]);


        Users::factory()->create([
            'user_type' => 'admin',
            'first_name' => 'Cris Argie',
            'last_name' => 'Ecleo',
            'email' => 'crisrgcleo@gmail.com',
            'password' => 'HelloWorld',
        ]);



        Type_of_requests::create([
            'request_title' => 'Repair'
        ]);
        Type_of_requests::create([
            'request_title' => 'Upgrade'
        ]);
        Type_of_requests::create([
            'request_title' => 'Other'
        ]);

        Area_of_requests::create([
            'request_title' => 'Cables'
        ]);
        Area_of_requests::create([
            'request_title' => 'Keyboard'
        ]);
        Area_of_requests::create([
            'request_title' => 'Mouse'
        ]);
        Area_of_requests::create([
            'request_title' => 'Printer'
        ]);
        Area_of_requests::create([
            'request_title' => 'Internet'
        ]);
        Area_of_requests::create([
            'request_title' => 'CD/DVD Drive'
        ]);
        Area_of_requests::create([
            'request_title' => 'Memory'
        ]);
        Area_of_requests::create([
            'request_title' => 'Network'
        ]);
        Area_of_requests::create([
            'request_title' => 'Power Supply'
        ]);
        Area_of_requests::create([
            'request_title' => 'Hard Drive'
        ]);
        Area_of_requests::create([
            'request_title' => 'Monitor'
        ]);
        Area_of_requests::create([
            'request_title' => 'Software Programs'
        ]);
        Area_of_requests::create([
            'request_title' => 'Other Hardware'
        ]);
        Area_of_requests::create([
            'request_title' => 'USB Device'
        ]);

        Users::factory(5)->create();
        Equipment::factory(10)->create();

        IctForms::factory(4)->create();

        IctRequest::factory(4)->create();
    }
}
