<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'sport_id', 'coach_id', 'image'];

    public function sport(): BelongsTo
    {
        return $this->belongsTo(Sport::class);
    }

    public function coach(): BelongsTo
    {
        return $this->belongsTo(User::class, 'coach_id');
    }

    public function players(): HasMany
    {
        return $this->hasMany(Player::class);
    }
    public function sessionTeamPlayers(): HasMany
    {
        return $this->hasMany(SessionTeamPlayer::class);
    }

    public function sessionTeam(): HasOne
    {
        return $this->hasOne(SessionTeam::class);
    }
}
