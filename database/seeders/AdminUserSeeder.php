<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'firstname' => 'Admin',
            'lastname' => 'User',
            'username' => 'admin',
            'email' => 'admin@example.com',
            'role' => 'admin', // Set the role as 'admin'
            'password' => Hash::make('password'), // Set a secure password// Assuming 1 is for active status
        ]);
    }
}
