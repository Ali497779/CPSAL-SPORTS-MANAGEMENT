<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    public function run(): void
    {
        $teams = [
            [
                'name' => 'Team1',
                'image' => 'teams/team-1.png',
                'sport_id' => '1',
                'coach_id' => '2',
            ],
            [
                'name' => 'Team2',
                'image' => 'teams/team-2.png',
                'sport_id' => '1',
                'coach_id' => '3',
            ],
        ];
        foreach ($teams as $team) {
            Team::create($team);
        }
    }
}
