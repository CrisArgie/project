<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Divisions;
use App\Models\Users;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Users::truncate();
        Divisions::truncate();

        // Divisions::create([
        //     'division_number'   => '1',
        //     'division_name'     => '1st Division',
        //     'division_address'  => 'Brgy X, x City, XXXX'
        // ]);

        Users::create([
            'user_type'     => 'admin',
            'first_name'    => 'Admin',
            'last_name'     => 'Admin',
            'email'         => 'crisrgcleo@gmail.com',
            'password'      => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        ]);

        Users::create([
            'user_type'     => 'customer',
            'first_name'    => 'Admin',
            'last_name'     => 'Admin',
            'email'         => 'customer1@gmail.com',
            'password'      => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        ]);
    }
}
