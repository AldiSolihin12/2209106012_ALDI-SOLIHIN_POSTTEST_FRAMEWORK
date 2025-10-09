<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tags;

class TagSeeder extends Seeder
{
    public function run(): void
    {
        $tags = [
            ['name' => 'Fast'],
            ['name' => 'Lightweight'],
            ['name' => 'Premium'],
            ['name' => 'Electric'],
            ['name' => 'Limited Edition'],
            ['name' => 'Off-Road'],
            ['name' => 'Sport'],
            ['name' => 'Family'],
            ['name' => 'Compact'],
            ['name' => 'Luxury'],
            ['name' => 'Economical'],
            ['name' => 'Classic'],
            ['name' => 'Modern'],
            ['name' => 'advanced'],
            ['name' => 'xtreme'],
            ['name' => 'pro'],
            ['name' => 'elite'],
            ['name' => 'ultimate'],
            ['name' => 'performance'],
        ];

        Tags::insert($tags);
    }
}

