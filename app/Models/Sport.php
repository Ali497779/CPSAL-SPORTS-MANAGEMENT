<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sport extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'min_players',
        'max_players',
    ];

    public function coach(): BelongsTo
    {
        return $this->belongsTo(User::class, 'coach_id');
    }

    public function teams(): HasMany
    {
        return $this->hasMany(Team::class, 'sport_id');
    }

    public function attributes(): HasMany
    {
        return $this->hasMany(SportAttribute::class);
    }
}
