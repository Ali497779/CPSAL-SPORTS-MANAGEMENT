<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    protected $fillable = [
        'avatar',
    'email',
    'username',
    'coach_age',
    'coach_experience',
    'coach_nationality',
    'coach_past_team',
    'password',
    'name',
    'address',
    'is_verified'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function school(): HasOne
    {
        return $this->hasOne(School::class, 'coach_id');
    }

    public function scopeExcludeAdmins($query)
    {
        return $query->whereDoesntHave('roles', function ($query) {
            $query->where('name', 'admin');
        });
    }

    public function scopeCoaches($query)
    {
        return $query->whereHas('roles', function ($query) {
            $query->where('name', 'coach');
        });
    }
    // public function team(){
    //     return $this->hasOne(Team::class,'coach_id');
    // }
}
