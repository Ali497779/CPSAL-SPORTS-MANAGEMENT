<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayerScore extends Model
{
    use HasFactory;

    protected $fillable = [
        'session_team_id',
        'team_id',
        'battle_id',
        'player_id',
        'score',
    ];

    public function player()
    {
        return $this->belongsTo(Player::class, 'player_id');
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function battle()
    {
        return $this->belongsTo(Battle::class);
    }

}
