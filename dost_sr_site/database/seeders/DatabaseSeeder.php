<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\AreaOfRequests;
use App\Models\AreaRequests;
use App\Models\Divisions;
use App\Models\Equipment;
use App\Models\IctForms;
use App\Models\IctRequests;
use App\Models\PostRepairInspections;
use App\Models\PreRepairInspections;
use App\Models\RepairRequest;
use App\Models\TypeOfRequests;
use App\Models\Users;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Users::truncate();
        AreaOfRequests::truncate();
        TypeOfRequests::truncate();
        Divisions::truncate();

        // Divisions::create([
        //     'division_number'   => '1',
        //     'division_name'     => '1st Division',
        //     'division_address'  => 'Brgy X, x City, XXXX'
        // ]);

        Divisions::factory(15)->create();


        Users::factory()->create([
            'user_type' => 'admin',
            'first_name' => 'Cris Argie',
            'last_name' => 'Ecleo',
            'email' => 'crisrgcleo@gmail.com',
            'password' => 'helloworld2022',
        ]);



        TypeOfRequests::create([
            'request_title' => 'Repair'
        ]);
        TypeOfRequests::create([
            'request_title' => 'Upgrade'
        ]);
        TypeOfRequests::create([
            'request_title' => 'Other'
        ]);

        AreaOfRequests::create([
            'request_title' => 'Cables'
        ]);
        AreaOfRequests::create([
            'request_title' => 'Keyboard'
        ]);
        AreaOfRequests::create([
            'request_title' => 'Mouse'
        ]);
        AreaOfRequests::create([
            'request_title' => 'Printer'
        ]);
        AreaOfRequests::create([
            'request_title' => 'Internet'
        ]);
        AreaOfRequests::create([
            'request_title' => 'CD/DVD Drive'
        ]);
        AreaOfRequests::create([
            'request_title' => 'Memory'
        ]);
        AreaOfRequests::create([
            'request_title' => 'Network'
        ]);
        AreaOfRequests::create([
            'request_title' => 'Power Supply'
        ]);
        AreaOfRequests::create([
            'request_title' => 'Hard Drive'
        ]);
        AreaOfRequests::create([
            'request_title' => 'Monitor'
        ]);
        AreaOfRequests::create([
            'request_title' => 'Software Programs'
        ]);
        AreaOfRequests::create([
            'request_title' => 'Other Hardware'
        ]);
        AreaOfRequests::create([
            'request_title' => 'USB Device'
        ]);

        Users::factory(5)->create();
        Equipment::factory(10)->create();

        RepairRequest::factory(10)->create();

        IctForms::factory(10)->create();
        IctRequests::factory(20)->create();
        AreaRequests::factory(15)->create();

        PreRepairInspections::factory(5)->create();

        PostRepairInspections::factory(5)->create();

    }
}
