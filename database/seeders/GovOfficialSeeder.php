<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GovOfficialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('govofficials')->insert([
            'user_id'=> 4,
            'full_name'=> 'Nimal Perera',
            'preferred_name'=> 'Nimal',
            'designation'=> 'Project Manager',
            'contact_number'=> '0711452587',
            'email'=> 'nimalperera@gmail.com',
            'employment_layer'=> 'Middle and Junior Management',
            'date_of_birth'=> '1990-11-25',
            'linkedin'=> 'https://lk.linkedin.com/',
            'facebook'=> 'https://www.facebook.com/',
            'instagram'=> 'https://www.instagram.com/',
            'govorganizationname_id' => 6,

        ]);

        DB::table('govofficials')->insert([
            'user_id'=> 5,
            'full_name'=> 'Kamal Perera',
            'preferred_name'=> 'Kamal',
            'designation'=> 'Project Manager',
            'contact_number'=> '0771452587',
            'email'=> 'kamalperera@gmail.com',
            'employment_layer'=> 'cdio',
            'date_of_birth'=> '1990-10-25',
            'linkedin'=> 'https://lk.linkedin.com/',
            'facebook'=> 'https://www.facebook.com/',
            'instagram'=> 'https://www.instagram.com/',
            'govorganizationname_id' => 6,

        ]);
    }
}
