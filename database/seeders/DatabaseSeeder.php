<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Create user statuses
        \App\Models\UserStatus::create([
            'status' => 'suspended',
            'can_interact' => 0,
            'can_post' => 0,
            'is_admin' => 0,
        ]);
        \App\Models\UserStatus::create([
            'status' => 'user',
            'can_interact' => 1,
            'can_post' => 0,
            'is_admin' => 0,
        ]);
        \App\Models\UserStatus::create([
            'status' => 'writer',
            'can_interact' => 1,
            'can_post' => 1,
            'is_admin' => 0,
        ]);
        \App\Models\UserStatus::create([
            'status' => 'moderator',
            'can_interact' => 1,
            'can_post' => 1,
            'is_admin' => 1,
        ]);

        // Create test user **REMOVE BEFORE PRODUCTION**
        \App\Models\User::create([
            'username' => 'Renars',
            'email' => 'renars@test.com',
            'password' => Hash::make('admin'),
            'user_status_id' => 4,
        ]);
    }
}
