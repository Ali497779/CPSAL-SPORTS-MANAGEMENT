<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            SportSeeder::class,
            SeoSeeder::class,
            PageSeeder::class,
            // SchoolSeeder::class,
            // TeamSeeder::class,
            // PlayerSeeder::class,
            // SessionSeeder::class,
            // BattleSeeder::class,
        ]);
    }
}
