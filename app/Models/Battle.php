<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Battle extends Model
{
    use HasFactory;

    protected $fillable = [
        'session_id',
        'by_team_id',
        'for_team_id',
        'battle_date',
        'battle_time',
        'destination',
        'status',
        'postponed',
    ];

    public function session(): BelongsTo
    {
        return $this->belongsTo(Session::class);
    }

    public function byTeam(): BelongsTo
    {
        return $this->belongsTo(Team::class, 'by_team_id');
    }

    public function forTeam(): BelongsTo
    {
        return $this->belongsTo(Team::class, 'for_team_id');
    }

    public function players(): HasMany
    {
        return $this->hasMany(Player::class, 'team_id');
    }

    public function playerScore(): HasOne
    {
        return $this->hasOne(PlayerScore::class);
    }
    
    public function sessionTeamScore(): HasOne
    {
        return $this->hasOne(SessionTeamScore::class);
    }

    // public function sessionTeam(): HasOne
    // {
    //     return $this->hasOne(SessionTeam::class);
    // }
}
