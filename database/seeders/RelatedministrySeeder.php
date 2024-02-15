<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RelatedministrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('related_ministries')->insert([
            'related_ministry' => "President's office",
        ]);

        DB::table('related_ministries')->insert([
            'related_ministry' => "Prime Minister's office",
        ]);

        DB::table('related_ministries')->insert([
            'related_ministry' => "Ministry of Defence",
        ]);

        DB::table('related_ministries')->insert([
            'related_ministry' => "Ministry of Finance, Economic Stabilization and National Policies",
        ]);

        DB::table('related_ministries')->insert([
            'related_ministry' => "Ministry of Ports, Shipping and Aviation",
        ]);

        DB::table('related_ministries')->insert([
            'related_ministry' => "Ministry of Foreign Affairs",
        ]);

        DB::table('related_ministries')->insert([
            'related_ministry' => "Ministry of Public Administration, Home Affairs, Provincial Councils and Local Government",
        ]);

        DB::table('related_ministries')->insert([
            'related_ministry' => "Ministry of Education",
        ]);

        DB::table('related_ministries')->insert([
            'related_ministry' => "Ministry of Transport and Highways",
        ]);

        DB::table('related_ministries')->insert([
            'related_ministry' => "Ministry of Mass Media",
        ]);

        DB::table('related_ministries')->insert([
            'related_ministry' => "Ministry of Health",
        ]);

        DB::table('related_ministries')->insert([
            'related_ministry' => "Ministry of Agriculture",
        ]);

        DB::table('related_ministries')->insert([
            'related_ministry' => "Ministry of Wildlife and Forest Resources Conservation",
        ]);

        DB::table('related_ministries')->insert([
            'related_ministry' => "Ministry of Justice, Prison Affairs and Constitutional Reforms",
        ]);

        DB::table('related_ministries')->insert([
            'related_ministry' => "Ministry of Tourism and Lands",
        ]);

        DB::table('related_ministries')->insert([
            'related_ministry' => "Ministry of Plantation Industries",
        ]);

        DB::table('related_ministries')->insert([
            'related_ministry' => "Ministry of Industries",
        ]);

        DB::table('related_ministries')->insert([
            'related_ministry' => "Ministry of Urban Development and Housing",
        ]);

        DB::table('related_ministries')->insert([
            'related_ministry' => "Ministry of Buddhasasana, Religious and Cultural Affairs",
        ]);

        DB::table('related_ministries')->insert([
            'related_ministry' => "Ministry of Power and Energy",
        ]);

        DB::table('related_ministries')->insert([
            'related_ministry' => "Ministry of Environment",
        ]);

        DB::table('related_ministries')->insert([
            'related_ministry' => "Ministry of Irrigation",
        ]);

        DB::table('related_ministries')->insert([
            'related_ministry' => "Ministry of Sports & Youth Affairs",
        ]);

        DB::table('related_ministries')->insert([
            'related_ministry' => "Ministry of Labour and Foreign Employment",
        ]);

        DB::table('related_ministries')->insert([
            'related_ministry' => "Ministry of Public Security",
        ]);

        DB::table('related_ministries')->insert([
            'related_ministry' => "Ministry of Trade, Commerce and Food Security",
        ]);

        DB::table('related_ministries')->insert([
            'related_ministry' => "Ministry of Women, Child Affairs and Social Empowerment",
        ]);

        DB::table('related_ministries')->insert([
            'related_ministry' => "Ministry of Technology",
        ]);

        DB::table('related_ministries')->insert([
            'related_ministry' => "Ministry of Investment Promotions",
        ]);

        DB::table('related_ministries')->insert([
            'related_ministry' => "Ministry of Water Supply and Estate Infrastructure Development",
        ]);
    }
}
