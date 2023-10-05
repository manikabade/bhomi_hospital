<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AmbulanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ambulances')->insert([
                'ambulance_name'               => 'Banepa Route 1',
                'phone_number'                 => '011662222',
                'status'                       => '1',
            ],
            [
                'ambulance_name'               => 'Banepa Route 2',
                'phone_number'                 => '465158465',
                'status'                       => '1',
            ]
        );
    }
}
