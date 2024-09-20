<?php

namespace Database\Seeders;

use App\Models\Sport;
use Illuminate\Database\Seeder;

class SportSeeder extends Seeder
{
    public function run(): void
    {
        $Sport = [
            [
                'name' => 'Basketball',
                'min_players' => '5',
                'max_players' => '5',
            ],
            [
                'name' => 'Soccer',
                'min_players' => '11',
                'max_players' => '11',
            ],
            [
                'name' => 'Flag Football',
                'min_players' => '7',
                'max_players' => '7',
            ],
            [
                'name' => 'Tennis',
                'min_players' => '2',
                'max_players' => '2',
            ],
            [
                'name' => 'Baseball',
                'min_players' => '9',
                'max_players' => '25',
            ],
            [
                'name' => 'Softball',
                'min_players' => '9',
                'max_players' => '9',
            ],
            [
                'name' => 'Track & Feild',
                'min_players' => '1',
                'max_players' => '1',
            ],
            [
                'name' => 'Cross Country',
                'min_players' => '5',
                'max_players' => '7',
            ],
            [
                'name' => 'Cheerleading',
                'min_players' => '5',
                'max_players' => '30',
            ],
            [
                'name' => 'Volleyball',
                'min_players' => '6',
                'max_players' => '6',
            ],
            [
                'name' => 'ESports',
                'min_players' => '1',
                'max_players' => '99',
            ],
        ];
        foreach ($Sport as $s) {
            Sport::create([
                'name' => $s['name'],
                'min_players' => $s['min_players'],
                'max_players' => $s['max_players'],
            ]);
        }
    }
}
