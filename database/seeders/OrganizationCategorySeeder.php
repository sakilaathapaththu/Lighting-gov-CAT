<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrganizationCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('organization_categories')->insert([
            'org_category' => 'Ministry',
        ]);

        DB::table('organization_categories')->insert([
            'org_category' => 'Statutary Body',
        ]);

        DB::table('organization_categories')->insert([
            'org_category' => 'Department',
        ]);

        DB::table('organization_categories')->insert([
            'org_category' => 'District Secretariat',
        ]);

        DB::table('organization_categories')->insert([
            'org_category' => 'Provincial Councils',
        ]);

        DB::table('organization_categories')->insert([
            'org_category' => 'Local Authority',
        ]);

        DB::table('organization_categories')->insert([
            'org_category' => 'Divisional Secretariat',
        ]);

        DB::table('organization_categories')->insert([
            'org_category' => 'Provincial Ministry',
        ]);

        DB::table('organization_categories')->insert([
            'org_category' => 'Provincial Department',
        ]);

        DB::table('organization_categories')->insert([
            'org_category' => 'Municipal Council',
        ]);

        DB::table('organization_categories')->insert([
            'org_category' => 'Urban Council',
        ]);

        DB::table('organization_categories')->insert([
            'org_category' => 'Pradeshiya Sabha',
        ]);

        DB::table('organization_categories')->insert([
            'org_category' => 'Government Owned Company',
        ]);

    }
}
