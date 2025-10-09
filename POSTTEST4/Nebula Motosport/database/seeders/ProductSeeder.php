<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
             [
                'name' => 'Nebula X1',
                'price' => 12499,
                // 'description' => 'Motor sport futuristik dengan desain aerodinamis dan performa tinggi.',
                'image' => 'https://images.unsplash.com/photo-1503376780353-7e6692767b70?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'category_id' => 3,
            ],
            [
                'name' => 'Nebula Raptor',
                'price' => 15299,
                // 'description' => 'Kecepatan dan ketangguhan berpadu dalam Raptor, dirancang untuk pengendara berani.',
                'image' => 'https://images.unsplash.com/photo-1502877338535-766e1452684a?auto=format&fit=crop&w=600&q=80',
                'category_id' => 2,
            ],
            [
                'name' => 'Nebula Vortex',
                'price' => 13750,
                // 'description' => 'Motor dengan teknologi stabilitas tinggi, ideal untuk touring maupun balap.',
                'image' => 'https://images.unsplash.com/photo-1692011249564-f068e80ccea5?q=80&w=1176&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'category_id' => 4,
            ],
            [
                'name' => 'Nebula Phantom',
                'price' => 16200,
                // 'description' => 'Elegan, cepat, dan misterius. Phantom hadir dengan teknologi terbaru.',
                'image' => 'https://images.unsplash.com/photo-1747842914486-481cc1c7a04a?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'category_id' => 1,
            ],
            [
                'name' => 'Yamaha R1',
                'price' => 25000,
                // 'description' => 'Superbike Yamaha dengan performa tinggi untuk jalanan dan sirkuit.',
                'image' => 'https://images.unsplash.com/photo-1660648128024-cdd5f8930df6?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'category_id' => 5,
            ],
            [
                'name' => 'Kawasaki Ninja ZX-10R',
                'price' => 22000,
                // 'description' => 'Motor Kawasaki Ninja andalan dengan desain agresif.',
                'image' => 'https://images.unsplash.com/photo-1755585191003-287189280e3a?q=80&w=627&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'category_id' => 5,
            ],
            [
                'name' => 'BMW S1000 RR',
                'price' => 21000,
                // 'description' => 'BMW sportbike bertenaga dengan desain aerodinamis.',
                'image' => 'https://images.unsplash.com/photo-1692286133617-53c2f1669066?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'category_id' => 5,
            ],
            [
                'name' => 'Ducati Panigale V4',
                'price' => 30000,
                // 'description' => 'Motor Ducati dengan teknologi balap dan desain mewah.',
                'image' => 'https://images.unsplash.com/photo-1753563822888-7ac7a811359f?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'category_id' => 5,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
