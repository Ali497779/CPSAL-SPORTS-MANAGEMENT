<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SportAttributeValue extends Model
{
    use HasFactory;

    protected $fillable = [
        'sport_attribute_id',
        'player_id',
        'value',
    ];

    public function sportAttribute()
    {
        return $this->belongsTo(SportAttribute::class, 'sport_attribute_id');
    }
}
