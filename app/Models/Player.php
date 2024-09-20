<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Player extends Model
{
    use HasFactory;

    protected $fillable = ['team_id', 'name','image'];

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    public function playerscore()
    {
        return $this->hasMany(PlayerScore::class, 'player_id');
    }

    public function sportAttributeValues()
    {
        return $this->hasMany(SportAttributeValue::class, 'player_id');
    }
}
