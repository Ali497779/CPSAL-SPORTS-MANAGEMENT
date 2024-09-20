<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UserService
{
    public function register($request)
    {
        $avatar = $request->avatar->store('users', 'public');
        $user = User::create($request->except(['password', 'avatar']) + ['password' => bcrypt($request->password), 'avatar' => $avatar]);
        $user->assignRole(2);
        // auth()->login($user);

        return $user->id;
    }

    public function profileEdit($request): void
    {
        $avatar = auth()->user()->avatar;
        if ($request->avatar) {
            Storage::disk('public', 'users')->delete($avatar);
            $avatar = $request->avatar->store('users', 'public');
        }

        User::find(auth()->id())->update($request->except(['password', 'avatar']) + ['password' => bcrypt($request->password), 'avatar' => $avatar]);
    }
}
