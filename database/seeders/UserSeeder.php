<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'username' => 'admin',
                'avatar' => 'users/user-1.png',
                'email' => 'admin@test.com',
                'is_verified' => 1,
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'remember_token' => Str::random(10),
            ],
            [
                'username' => 'coach1',
                'avatar' => 'users/user-2.png',
                'email' => 'coach1@test.com',
                'is_verified' => 1,
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'remember_token' => Str::random(10),
            ],
            [
                'username' => 'coach2',
                'avatar' => 'users/user-3.png',
                'email' => 'coach2@test.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'remember_token' => Str::random(10),
            ],
            [
                'username' => 'coach3',
                'avatar' => 'users/user-2.png',
                'email' => 'coach3@test.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'remember_token' => Str::random(10),
            ],
            [
                'username' => 'coach4',
                'avatar' => 'users/user-2.png',
                'email' => 'coach4@test.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'remember_token' => Str::random(10),
            ],
            [
                'username' => 'coach5',
                'avatar' => 'users/user-2.png',
                'email' => 'coach5@test.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'remember_token' => Str::random(10),
            ],
            [
                'username' => 'coach6',
                'avatar' => 'users/user-2.png',
                'email' => 'coach6@test.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'remember_token' => Str::random(10),
            ],
            [
                'username' => 'coach7',
                'avatar' => 'users/user-2.png',
                'email' => 'coach7@test.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'remember_token' => Str::random(10),
            ],
        ];
        foreach ($users as $key => $user) {
            $userData = User::create($user);
            if ($key == 0) {
                $userData->assignRole(1);
            } else {
                $userData->assignRole(2);
            }
        }
    }
}
