<?php

namespace App\Models;

use App\Models\Battle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SessionTeam extends Model
{
    use HasFactory;

    protected $fillable = [
        'session_id',
        'team_id',
    ];

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    public function session(): BelongsTo
    {
        return $this->belongsTo(Session::class);
    }

    public function sessionTeamPlayers(): HasMany
    {
        return $this->hasMany(SessionTeamPlayer::class);
    }

    public function sessionTeamScore(): HasOne
    {
        return $this->hasOne(SessionTeamScore::class);
    }
    
    public function playerScores(): HasMany
    {
        return $this->hasMany(PlayerScore::class);
    }
    public function battle(): HasMany
    {
        return $this->hasMany(Battle::class);
    }
}
