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

        ]);
        [
            'ambulance_name'               => 'Sangaa Route 1',
            'phone_number'                 => '011662220',

        ];

        [
            'ambulance_name'               => 'Nala Route 1',
            'phone_number'                 => '011662221',

        ];
        [
            'ambulance_name'               => 'Dhulikhel Route 1',
            'phone_number'                 => '011662222',

        ];
        [
            'ambulance_name'               => 'Panauti Route 1',
            'phone_number'                 => '011662222',

        ];
    }
}
