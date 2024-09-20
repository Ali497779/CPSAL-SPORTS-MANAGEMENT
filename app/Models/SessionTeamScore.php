<?php

namespace App\Models;

// use App\Models\Battle;
use App\Models\SessionTeam;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class   SessionTeamScore extends Model
{
    use HasFactory;

    protected $fillable = [
        'session_team_id',
        'battle_id',
        'is_win',
        'score',
        'points',
    ];

    public function SessionTeam(): BelongsTo
    {
        return $this->belongsTo(SessionTeam::class);
    }
    
    public function battle(): BelongsTo
    {
        return $this->belongsTo(Battle::class);
    }

}
