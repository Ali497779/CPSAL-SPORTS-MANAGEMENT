<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    public function run(): void
    {
        $players = [
            [
                'name' => 'player1',
                'team_id' => '1',
            ],
            [
                'name' => 'player2',
                'team_id' => '2',
            ],
        ];

        foreach ($players as $player) {
            Player::create($player);
        }
    }
}
