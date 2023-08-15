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
                'status'      =>'1',
            ],
        ]);

        DB::table('schedule_management')->insert([
        [
            'specialist_id'             =>'1',
            'time_for_appointment'      =>'10:00AM -11:00AM',
            'status'=>'1'
        ],

        [
            'specialist_id'           =>'1',
            'time_for_appointment'    =>'11:00AM -12:00PM',
            'status'=>'1'
        ],
        [
            'specialist_id'           =>'1',
            'time_for_appointment'    =>'12:00PM -1:00PM',
             'status'=>'1'
        ],
        [
            'specialist_id'           =>'1',
            'time_for_appointment'    =>'1:00PM -2:00PM',
             'status'=>'1'
        ],
        [
            'specialist_id'           =>'1',
            'time_for_appointment'    =>'2:00PM -3:00PM',
             'status'=>'1'
        ],
        [
            'specialist_id'           =>'1',
            'time_for_appointment'    =>'3:00PM -4:00PM',
             'status'=>'1'
        ],
        [
            'specialist_id'           =>'1',
            'time_for_appointment'    =>'4:00PM -5:00PM',
             'status'=>'1'
        ],


        ]);
    }
}
