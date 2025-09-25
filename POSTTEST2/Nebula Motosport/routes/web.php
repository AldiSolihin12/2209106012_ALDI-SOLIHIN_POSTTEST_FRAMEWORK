<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $products = [
        [
            'name' => 'Nebula X1',
            'price' => 12499,
            'image' => 'https://images.unsplash.com/photo-1503376780353-7e6692767b70?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        ],
        [
            'name' => 'Nebula Raptor',
            'price' => 15299,
            'image' => 'https://images.unsplash.com/photo-1502877338535-766e1452684a?auto=format&fit=crop&w=600&q=80',
        ],
        [
            'name' => 'Nebula Vortex',
            'price' => 13750,
            'image' => 'https://images.unsplash.com/photo-1692011249564-f068e80ccea5?q=80&w=1176&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        ],
        [
            'name' => 'Nebula Phantom',
            'price' => 16200,
            'image' => 'https://images.unsplash.com/photo-1747842914486-481cc1c7a04a?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        ],
    ];

    return view('welcome', [
        "title" => "Welcome",
        "products" => $products
    ]);
})->name('welcome');
