<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Session extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sport_id',
        'is_oppenent'
    ];

    public function sport(): BelongsTo
    {
        return $this->belongsTo(Sport::class);
    }

    public function battles(): HasMany
    {
        return $this->hasMany(Battle::class);
    }

    public function sessionTeams(): HasMany
    {
        return $this->hasMany(SessionTeam::class);
    }
}
