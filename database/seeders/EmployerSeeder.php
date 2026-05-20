<?php

namespace Database\Seeders;

use App\Models\Employer;
use Illuminate\Database\Seeder;

class EmployerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employer::create([
            'name' => 'BBC',
            'industry' => 'Media and Technology',
            'area' => 'Manchester',
            'degree_tags' => ['Computer Science', 'Marketing', 'Business'],
            'sample_roles' => ['Graduate Software Engineer', 'Junior Product Analyst'],
            'website' => 'https://www.bbc.co.uk/careers',
        ]);
    }
}
