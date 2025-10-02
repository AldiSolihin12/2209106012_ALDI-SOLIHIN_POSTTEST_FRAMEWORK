@extends('components.layouts.app')
@section('content')
<div class="max-w-6xl mx-auto py-12 px-6 grid grid-cols-1 md:grid-cols-2 gap-10">

    {{-- Left: Images --}}
    <div>
        <img src="{{ $product->image }}" alt="{{ $product->name }}" 
             class="rounded-2xl w-full h-80 object-cover shadow-lg">
        
        <div class="flex gap-3 mt-4">
            <img src="{{ $product->image }}" class="w-24 h-20 object-cover rounded-lg border-2 border-indigo-500">
            <img src="{{ $product->image }}" class="w-24 h-20 object-cover rounded-lg">
            <img src="{{ $product->image }}" class="w-24 h-20 object-cover rounded-lg">
        </div>
    </div>

    {{-- Right: Details --}}
    <div class="space-y-6">
        <h1 class="text-3xl font-bold text-gray-900">{{ $product->name }}</h1>

        <div class="flex items-center gap-2">
            <span class="text-yellow-400 text-xl">★★★★★</span>
            <span class="text-gray-600">440+ Reviewer</span>
        </div>

        <p class="text-gray-600 leading-relaxed">
            {{ $product->description ?? 'This is a premium motorcycle with outstanding performance and futuristic design.' }}
        </p>

        <div class="grid grid-cols-2 gap-6 text-sm">
            <div>
                <p class="font-semibold text-gray-800">Type Car</p>
                <p class="text-gray-600">Sport</p>
            </div>
            <div>
                <p class="font-semibold text-gray-800">Capacity</p>
                <p class="text-gray-600">2 Person</p>
            </div>
            <div>
                <p class="font-semibold text-gray-800">Steering</p>
                <p class="text-gray-600">Manual</p>
            </div>
            <div>
                <p class="font-semibold text-gray-800">Gasoline</p>
                <p class="text-gray-600">70L</p>
            </div>
        </div>

        <div class="flex items-center gap-4">
            <p class="text-3xl font-bold text-indigo-600">${{ number_format($product->price, 2) }}</p>
            <p class="line-through text-gray-400">$100.00</p>
            <span class="text-gray-600">/ Unit</span>
        </div>

        <button class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-8 py-3 rounded-full shadow-md transition-transform transform hover:scale-105">
            Buy Now
        </button>
    </div>
</div>
@endsection
