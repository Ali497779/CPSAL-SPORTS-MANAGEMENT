<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SportAttribute extends Model
{
    use HasFactory;

    protected $fillable = [
        'sport_id',
        'name',
    ];
}
