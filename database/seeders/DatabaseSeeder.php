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
        \App\Models\UserStatus::create([
            'status' => 'suspended',
            'can_comment' => 0,
            'can_write' => 0,
            'can_modify' => 0,
        ]);
        \App\Models\UserStatus::create([
            'status' => 'user',
            'can_comment' => 1,
            'can_write' => 0,
            'can_modify' => 0,
        ]);
        \App\Models\UserStatus::create([
            'status' => 'writer',
            'can_comment' => 1,
            'can_write' => 1,
            'can_modify' => 0,
        ]);
        \App\Models\UserStatus::create([
            'status' => 'moderator',
            'can_comment' => 1,
            'can_write' => 1,
            'can_modify' => 1,
        ]);
        \App\Models\User::create([
            'username' => 'Renars',
            'email' => 'renars@test.com',
            'password' => Hash::make('admin'),
            'user_status_id' => 4,
        ]);
    }
}
