@extends('components.layouts.app')

@section('content')
<div class="max-w-6xl mx-auto py-12 px-6 grid grid-cols-1 md:grid-cols-2 gap-10">

    {{-- 🖼️ Left: Product Image --}}
    <div>
        <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" 
             class="rounded-2xl w-full h-80 object-cover shadow-lg">
    </div>

    {{-- 📄 Right: Product Information --}}
    <div class="space-y-6">
        <h1 class="text-3xl font-bold text-gray-900">{{ $product->name }}</h1>

        {{-- 🏷️ Category --}}
        @if($product->category)
            <span class="inline-block bg-indigo-100 text-indigo-800 px-3 py-1 text-sm rounded-full">
                {{ $product->category->name }}
            </span>
        @endif

        {{-- 📝 Description --}}
        <p class="text-gray-600 leading-relaxed">
            {{ $product->details->description}}
        </p>

        {{-- ⚙️ Product Details --}}
        @if($product->details)
        <div class="grid grid-cols-2 gap-6 text-sm">
            <div>
                <p class="font-semibold text-gray-800">Engine</p>
                <p class="text-gray-600">{{ $product->details->engine_type ?? '-' }}</p>
            </div>
            <div>
                <p class="font-semibold text-gray-800">Capacity</p>
                <p class="text-gray-600">{{ $product->details->capacity ?? '-' }}</p>
            </div>
            <div>
                <p class="font-semibold text-gray-800">Transmission</p>
                <p class="text-gray-600">{{ $product->details->transmission ?? '-' }}</p>
            </div>
            <div>
                <p class="font-semibold text-gray-800">Gasoline</p>
                <p class="text-gray-600">{{ $product->details->gasoline ?? '-' }}</p>
            </div>
        </div>
        @endif

        {{-- 🔖 Tags --}}
        @if($product->tags->count())
            <div class="flex flex-wrap gap-2 mt-4">
                @foreach($product->tags as $tag)
                    <span class="bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-sm">
                        #{{ $tag->name }}
                    </span>
                @endforeach
            </div>
        @endif

        {{-- 💰 Price --}}
        <div class="flex items-center gap-4">
            <p class="text-3xl font-bold text-indigo-600">
                ${{ number_format($product->price, 0, ',', '.') }}
            </p>
        </div>

        {{-- 🛒 Buy Button --}}
        <button class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-8 py-3 rounded-full shadow-md transition-transform transform hover:scale-105">
            Beli Sekarang
        </button>
    </div>
</div>
@endsection
