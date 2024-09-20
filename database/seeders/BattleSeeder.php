<?php

namespace Database\Seeders;

use App\Models\Battle;
use Illuminate\Database\Seeder;

class BattleSeeder extends Seeder
{
    public function run(): void
    {
        Battle::create([
            'session_id' => '1',
            'by_team_id' => '1',
            'for_team_id' => '2',
            'battle_date' => '2023-06-01',
            'battle_time' => '10:00:00',
            'destination' => 'Noble Playground: Softball-01',
            'postponed' => '1',

        ],

        );
    }
}
