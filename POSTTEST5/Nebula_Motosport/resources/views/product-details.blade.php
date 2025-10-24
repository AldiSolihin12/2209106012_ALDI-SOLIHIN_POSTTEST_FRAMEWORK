@extends('components.layouts.app')

@php
    use Illuminate\Support\Facades\Storage;
    use Illuminate\Support\Str;
    $imageUrl = Str::startsWith($product->image, ['http://', 'https://'])
        ? $product->image
        : asset('storage/' . $product->image);
@endphp

@section('content')
<section class="relative overflow-hidden py-10">
    <div class="pointer-events-none absolute inset-0 -z-10">
        <div class="absolute -top-32 left-1/3 h-80 w-80 rounded-full bg-gradient-to-br from-indigo-300/40 via-sky-200/40 to-transparent blur-3xl animate-slow-rotate"></div>
        <div class="absolute bottom-0 right-1/4 h-96 w-96 rounded-full bg-gradient-to-br from-sky-200/40 via-indigo-200/40 to-transparent blur-3xl"></div>
    </div>
    <div class="max-w-[90%] lg:max-w-[80%] mx-auto px-6">
        <div class="glass-panel overflow-hidden grid gap-14 lg:grid-cols-[1.2fr_1fr] rounded-[32px] shadow-xl shadow-indigo-100/40 border border-indigo-50 bg-white/80 backdrop-blur">
            <div class="relative rounded-l-[32px] overflow-hidden">
                <img src="{{ $imageUrl }}" alt="{{ $product->name }}"
                    class="h-full w-full object-cover transition duration-700 hover:scale-105" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>

                <div class="absolute bottom-6 left-6 flex flex-wrap items-center gap-3 text-white text-xs font-semibold uppercase tracking-widest">
                    @if ($product->category)
                        <span class="rounded-full bg-indigo-500/40 px-3 py-1 backdrop-blur-md">{{ $product->category->name }}</span>
                    @endif
                    <span class="rounded-full bg-white/20 px-3 py-1 backdrop-blur-md">Motorsport</span>
                </div>
            </div>
            <div class="flex flex-col justify-between gap-10 px-10 py-12">
                <div class="space-y-6">
                    <div>
                        <h1 class="text-4xl font-extrabold text-gray-900 tracking-tight">{{ $product->name }}</h1>
                        <p class="mt-3 text-gray-600 leading-relaxed">
                            {{ $product->details->description ?? 'Experience premium engineering and outstanding control on every ride.' }}
                        </p>
                    </div>
                    <div class="grid gap-4 sm:grid-cols-2">
                        @foreach ([
                            ['Engine', $product->details->engine_type ?? '—'],
                            ['Capacity', $product->details->capacity ?? '—'],
                            ['Transmission', $product->details->transmission ?? '—'],
                            ['Fuel type', $product->details->gasoline ?? '—']
                        ] as [$label, $value])
                            <div class="rounded-2xl border border-indigo-100 bg-white px-6 py-5 shadow-sm hover:shadow-md transition hover:-translate-y-0.5">
                                <p class="text-xs font-semibold uppercase tracking-wider text-indigo-500">{{ $label }}</p>
                                <p class="mt-2 text-base font-semibold text-gray-900">{{ $value }}</p>
                            </div>
                        @endforeach
                    </div>
                    @if ($product->tags->count())
                        <div class="pt-2">
                            <p class="text-xs font-semibold uppercase tracking-[0.3em] text-gray-500">Featured Tags</p>
                            <div class="mt-2 flex flex-wrap gap-2">
                                @foreach ($product->tags as $tag)
                                    <span class="rounded-full bg-indigo-50 px-3 py-1 text-sm font-medium text-indigo-600 hover:-translate-y-0.5 transition">
                                        #{{ $tag->name }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
                <div class="flex flex-col gap-6 rounded-3xl border border-indigo-100 bg-gradient-to-br from-white to-indigo-50/60 px-8 py-8 shadow-lg shadow-indigo-100/60">
                    <div class="flex flex-wrap items-center justify-between gap-4">
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-[0.35em] text-gray-400">Starting from</p>
                            <p class="text-4xl font-bold text-indigo-600">${{ number_format($product->price, 0) }}</p>
                        </div>
                        <div class="flex items-center gap-2 rounded-full border border-indigo-100 bg-indigo-50 px-4 py-2 text-xs font-semibold uppercase tracking-[0.25em] text-indigo-600">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 2l7 7-7 7-7-7z"/>
                            </svg>
                            Performance tier
                        </div>
                    </div>

                    <p class="text-sm text-gray-600">Secure your build slot today and receive personalized delivery coordination directly from Nebula engineers.</p>

                    <div class="flex flex-wrap gap-4">
                        <button class="btn-primary px-8 py-3 text-sm rounded-full">Reserve this model</button>
                        <a href="{{ route('welcome') }}#contact" class="inline-flex items-center gap-2 rounded-full border border-indigo-200 px-6 py-3 text-sm font-semibold text-indigo-600 hover:bg-indigo-50 transition">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8V7a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-1"/>
                                <polyline points="17 8 12 13 7 8"/>
                            </svg>
                            Talk to specialist
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
