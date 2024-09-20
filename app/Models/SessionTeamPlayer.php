<?php

namespace App\Models;

use App\Models\SessionTeamPlayer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SessionTeamPlayer extends Model
{
    use HasFactory;

    protected $fillable = [
        'session_team_id',
        'player_id',
    ];

    public function player(): BelongsTo
    {
        return $this->belongsTo(Player::class);
    }
    

}
