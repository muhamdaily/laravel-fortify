<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat user tetap
        User::factory()->create([
            'name' => 'Muhammad Maghribi',
            'email' => 'superadmin@gmail.com',
            'image' => 'default.png',
            'role' => 'superadmin',
            'phone' => fake()->phoneNumber(),
            'bio' => fake()->paragraph(),
            'email_verified_at' => now(),
            'password' => Hash::make('superadmin'),
        ]);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'image' => 'default.png',
            'role' => 'admin',
            'phone' => fake()->phoneNumber(),
            'bio' => fake()->paragraph(),
            'email_verified_at' => now(),
            'password' => Hash::make('admin'),
        ]);

        User::factory()->create([
            'name' => 'Pengguna Terverifikasi',
            'email' => 'user@gmail.com',
            'image' => 'default.png',
            'role' => 'user',
            'phone' => fake()->phoneNumber(),
            'bio' => fake()->paragraph(),
            'email_verified_at' => now(),
            'password' => Hash::make('user'),
        ]);

        // Membuat random user
        // User::factory(10)->create();
    }
}
