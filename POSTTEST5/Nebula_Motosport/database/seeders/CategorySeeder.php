<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Electric'],
            ['name' => 'Touring'],
            ['name' => 'Adventure'],
            ['name' => 'Cruiser'],
            ['name' => 'Superbike'],
            ['name' => 'Convertible'],
            ['name' => 'Hypercar'],
            ['name' => 'Muscle Car'],
            ['name' => 'Hatchback'],
            ['name' => 'Sedan'],
            ['name' => 'SUV'],
            ['name' => 'Dirt Bike'],
            ['name' => 'Scooter'],
            ['name' => 'Moped'],
        ];

        Category::insert($categories);
    }
}

