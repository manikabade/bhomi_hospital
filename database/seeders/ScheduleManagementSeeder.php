<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScheduleManagementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {




        DB::table('specialists')->insert([
            [
                'specialist_name'             =>'Radiology',
                'status'                       =>'1',
            ],
        ]);
    }
}
