<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductDetail;
use Faker\Factory as Faker;

class ProductDetailSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        foreach (Product::all() as $product) {
            ProductDetail::create([
                'product_id'   => $product->id,
                'description'  => $faker->sentence(10),
                'engine_type'  => $faker->randomElement(['1000cc', '600cc', '750cc', '125cc']),
                'transmission' => $faker->randomElement(['Manual', 'Automatic']),
                'capacity'     => $faker->randomElement(['1 Person', '2 Person']),
                'gasoline'     => $faker->randomElement(['20L', '50L', '70L']),
                'horsepower'   => $faker->numberBetween(80, 250) . ' HP',
            ]);
        }
    }
}
