<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class School extends Model
{
    use HasFactory;

    protected $fillable = [
        'coach_id',
        'name',
        'image',
        'address',
        'phone',
        'fax',
        'principal_name',
        'principal_phone',
        'principal_email',
        'director_name',
        'director_phone',
        'director_email',
        'coach_age',
        'coach_experience',
        'coach_nationality',
        'coach_past_team',
        'athletic_assitant_name',
        'athletic_assitant_position',
        'athletic_assitant_email',
        'athletic_assitant_cell',
        'athletic_assitant_homephone',
        'gymnasium_address',
        'school_have_gym',
        'f_name',
        'l_name',
        'monday',
        'tuesday',
        'wednesday',
        'thursday',
        'friday',
        'saturday',
    ];

    

    public function coach(): BelongsTo
    {
        return $this->belongsTo(User::class, 'coach_id');
    }
}
