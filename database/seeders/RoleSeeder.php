<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $roles = ['admin', 'coach'];

        foreach ($roles as $key => $role) {
            Role::create([
                'name' => $role,
            ]);
            // User::find($key+1)->assignRole($key+1);
        }
        // User::find(3)->assignRole(2);
    }
}
