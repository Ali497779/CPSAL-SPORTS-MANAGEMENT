<?php

namespace App\Services;

use App\Models\School;
use App\Models\User;

class CoachService
{
    public function store($request): void
    {
        $avatar = $request->avatar?->store('users', 'public');
        $user = User::create($request->except(['password', 'avatar']) + ['password' => bcrypt($request->password), 'avatar' => $avatar]);
        $user->assignRole(2);
        $image = $request->image->store('schools', 'public');
        School::create($request->except(['image', 'coach_id']) + ['image' => $image, 'coach_id' => $user->id]);
    }

    public function update($request, $coach): void
    {
        $avatar = $request->avatar
                        ? $request->avatar->store('users', 'public')
                        : $coach->avatar;
        $coach->update($request->except(['password', 'avatar']) + ['password' => bcrypt($request->password), 'avatar' => $avatar]);
        $image = $request->image
                        ? $request->image->store('schools', 'public')
                        : $coach->school->image;
        $coach->school->update($request->except(['image', 'coach_id']) + ['image' => $image, 'coach_id' => $coach->id]);
    }
}
