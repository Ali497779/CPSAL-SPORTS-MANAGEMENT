<?php

namespace Database\Seeders;

use App\Models\Session;
use Illuminate\Database\Seeder;

class SessionSeeder extends Seeder
{
    public function run(): void
    {
        Session::create([
            'name' => 'psl',
            'sport_id' => '1',
        ]);
    }
}
