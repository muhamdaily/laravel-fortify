<?php

namespace Database\Seeders;

use App\Models\Site;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Site::create([
            'title' => 'Laravel Fortify',
            'meta' => 'laravel, muhampedia, muham',
            'deskripsi' => 'Laravel Fortify adalah implementasi backend otentikasi agnostik frontend untuk Laravel.',
            'icon' => 'default.png',
            'footer' => 'Muhammad Maghribi',
        ]);
    }
}
