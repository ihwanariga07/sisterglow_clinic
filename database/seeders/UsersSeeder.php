<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    public function run(): void
    {
        User::insert([
            [
                'name' => 'Resepsionis',
                'email' => 'admin@sisterglow.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'owner',
                'email' => 'owner@sisterglow.com',
                'password' => Hash::make('password'),
                'role' => 'owner',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
