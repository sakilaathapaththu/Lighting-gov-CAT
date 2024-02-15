<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CultureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cultures')->insert([
            'govorganizationdetail_id'=> 1,
            'leadership'=> '63',
            'standards'=> '78',
            'employee_engagement'=> '14',
            'level_of_skill'=> '48',
            'talent_management'=> '37'
        ]);
    }
}
