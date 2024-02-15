<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GovorganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('govorganizationdetails')->insert([
            'user_id'=> 3,
            'govorganizationname_id' => 1,
            'gov_org_address' => 'Thummulla,Colombo',
            'gov_org_email' => 'org@gmail.com',
            'organization_category_id' => 1,
            'number_of_employee' => '150',
            'related_ministry_id' => 1,
            'types_of_service' => 'Government to Citizen',
            'districts_of_operations' => 'Colombo',
            'phone_number' => '0111234567',
            'availablity_of_IT_unit' => 'Yes',
            'name_of_the_head' => 'Mr.ABC',
            'designation' => 'Head',
            'head_email' => 'head@gmail.com',
            'contact_number_of_the_head' => '0711584238',
            'dtu_type'=> 'Mid scale',
            'number_of_employees_dtu'=> '5'
        ]);
    }
}
