<?php

namespace Database\Seeders;

use App\Models\School;
use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    public function run(): void
    {
        $schools = [
            [
                'name' => 'School 1',
                'image' => 'schools/school-1.jpg',
                'address' => '50 Bedford Avenue Brooklyn NY 11222',
                'phone' => '7182182100',
                'fax' => '7185994351',
                'coach_id' => '2',
                'principal_name' => 'Mr. Neil S. Harris',
                'principal_phone' => '7182182100',
                'principal_email' => 'NHarris14@schools.nyc.gov',
                'director_name' => 'Moreno Fernandez',
                'director_phone' => '7182182100',
                'director_email' => 'mfernandez4@schools.nyc.gov',
            ],
            [
                'name' => 'School 2',
                'image' => 'schools/school-1.jpg',
                'address' => 'address 2',
                'phone' => '7182182100',
                'fax' => '7185994351',
                'coach_id' => '3',
                'principal_name' => 'Principal 2',
                'principal_phone' => '7182182100',
                'principal_email' => 'NHarris14@schools.nyc.gov',
                'director_name' => 'Director 2',
                'director_phone' => '7182182100',
                'director_email' => 'mfernandez4@schools.nyc.gov',
            ],
            [
                'name' => 'School 3',
                'image' => 'schools/school-1.jpg',
                'address' => 'address 2',
                'phone' => '7182182100',
                'fax' => '7185994351',
                'coach_id' => '4',
                'principal_name' => 'Principal 2',
                'principal_phone' => '7182182100',
                'principal_email' => 'NHarris14@schools.nyc.gov',
                'director_name' => 'Director 2',
                'director_phone' => '7182182100',
                'director_email' => 'mfernandez4@schools.nyc.gov',
            ],
            [
                'name' => 'School 4',
                'image' => 'schools/school-1.jpg',
                'address' => 'address 2',
                'phone' => '7182182100',
                'fax' => '7185994351',
                'coach_id' => '4',
                'principal_name' => 'Principal 2',
                'principal_phone' => '7182182100',
                'principal_email' => 'NHarris14@schools.nyc.gov',
                'director_name' => 'Director 2',
                'director_phone' => '7182182100',
                'director_email' => 'mfernandez4@schools.nyc.gov',
            ],
            [
                'name' => 'School 5',
                'image' => 'schools/school-1.jpg',
                'address' => 'address 2',
                'phone' => '7182182100',
                'fax' => '7185994351',
                'coach_id' => '5',
                'principal_name' => 'Principal 2',
                'principal_phone' => '7182182100',
                'principal_email' => 'NHarris14@schools.nyc.gov',
                'director_name' => 'Director 2',
                'director_phone' => '7182182100',
                'director_email' => 'mfernandez4@schools.nyc.gov',
            ],
            [
                'name' => 'School 6',
                'image' => 'schools/school-1.jpg',
                'address' => 'address 2',
                'phone' => '7182182100',
                'fax' => '7185994351',
                'coach_id' => '6',
                'principal_name' => 'Principal 2',
                'principal_phone' => '7182182100',
                'principal_email' => 'NHarris14@schools.nyc.gov',
                'director_name' => 'Director 2',
                'director_phone' => '7182182100',
                'director_email' => 'mfernandez4@schools.nyc.gov',
            ],
            [
                'name' => 'School 7',
                'image' => 'schools/school-1.jpg',
                'address' => 'address 2',
                'phone' => '7182182100',
                'fax' => '7185994351',
                'coach_id' => '7',
                'principal_name' => 'Principal 2',
                'principal_phone' => '7182182100',
                'principal_email' => 'NHarris14@schools.nyc.gov',
                'director_name' => 'Director 2',
                'director_phone' => '7182182100',
                'director_email' => 'mfernandez4@schools.nyc.gov',
            ],
            [
                'name' => 'School 8',
                'image' => 'schools/school-1.jpg',
                'address' => 'address 2',
                'phone' => '7182182100',
                'fax' => '7185994351',
                'coach_id' => '8',
                'principal_name' => 'Principal 2',
                'principal_phone' => '7182182100',
                'principal_email' => 'NHarris14@schools.nyc.gov',
                'director_name' => 'Director 2',
                'director_phone' => '7182182100',
                'director_email' => 'mfernandez4@schools.nyc.gov',
            ],
        ];
        foreach ($schools as $school) {
            School::create($school);
        }
    }
}
