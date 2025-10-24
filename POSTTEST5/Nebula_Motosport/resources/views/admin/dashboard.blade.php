@extends('components.layouts.app')

@section('content')
<section class="py-12 px-6 bg-gradient-to-b from-indigo-50 via-white to-indigo-50 min-h-[70vh]">
    <div class="max-w-6xl mx-auto space-y-10">
        <header class="glass-panel relative overflow-hidden reveal">
            <div class="absolute inset-0 bg-gradient-to-r from-indigo-500/10 via-sky-400/10 to-transparent"></div>
            <div class="relative flex flex-col gap-8 px-8 py-10 lg:flex-row lg:items-center lg:justify-between">
                <div class="space-y-4">
                    <span class="chip-soft inline-flex items-center gap-2">
                        <span class="h-2 w-2 rounded-full bg-indigo-500 animate-pulse"></span>
                        Welcome back, {{ auth()->user()->name }}
                    </span>
                    <div>
                        <h1 class="text-3xl md:text-4xl font-bold text-gray-900">Nebula Command Center</h1>
                        <p class="mt-2 max-w-xl text-sm md:text-base text-gray-600">
                            Monitor performance, manage your catalog, and keep your operations aligned in one streamlined overview.
                        </p>
                    </div>
                </div>
                <div class="flex flex-col gap-3 sm:flex-row">
                    <a href="{{ route('admin.products.create') }}" class="btn-primary">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                            <path d="M12 5v14m7-7H5"></path>
                        </svg>
                        New product
                    </a>
                    <a href="{{ route('admin.products.index') }}" class="inline-flex items-center justify-center gap-2 rounded-full border border-indigo-200 bg-white/80 px-6 py-3 text-sm font-semibold text-indigo-600 shadow-sm transition hover:-translate-y-0.5 hover:border-indigo-300 hover:bg-white">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        View inventory
                    </a>
                </div>
            </div>

            <div class="relative border-t border-white/40 px-8 py-8">
                <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="stat-card p-6">
                        <div class="flex items-start justify-between">
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wide text-indigo-400">Total products</p>
                                <p class="mt-3 text-3xl font-bold text-gray-900">{{ $stats['products'] }}</p>
                            </div>
                            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-indigo-500/10 text-indigo-600">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path d="M3 7l9-4 9 4-9 4-9-4z"></path>
                                    <path d="M3 17l9 4 9-4"></path>
                                    <path d="M3 12l9 4 9-4"></path>
                                </svg>
                            </div>
                        </div>
                        <p class="mt-4 text-sm text-gray-500">Keep your inventory fresh with consistent updates.</p>
                    </div>
                    <div class="stat-card p-6 delay-75">
                        <div class="flex items-start justify-between">
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wide text-indigo-400">Active categories</p>
                                <p class="mt-3 text-3xl font-bold text-gray-900">{{ $stats['categories'] }}</p>
                            </div>
                            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-indigo-500/10 text-indigo-600">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path d="M12 20l9-16H3l9 16z"></path>
                                </svg>
                            </div>
                        </div>
                        <p class="mt-4 text-sm text-gray-500">Organize offerings into curated collections for faster discovery.</p>
                    </div>
                    <div class="stat-card p-6 delay-150">
                        <div class="flex items-start justify-between">
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wide text-indigo-400">Registered users</p>
                                <p class="mt-3 text-3xl font-bold text-gray-900">{{ $stats['users'] }}</p>
                            </div>
                            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-indigo-500/10 text-indigo-600">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H7a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                            </div>
                        </div>
                        <p class="mt-4 text-sm text-gray-500">Build long-term loyalty with consistent engagement.</p>
                    </div>
                </div>
            </div>
        </header>

        <div class="grid gap-6 lg:grid-cols-3">
            <section class="glass-panel reveal lg:col-span-2">
                <div class="flex flex-col  gap-4 border-b border-white/40 bg-indigo-50/60 px-6 py-5 sm:flex-row sm:items-center sm:justify-between">
                    <div>
                        <h2 class="text-lg font-semibold text-gray-900">Latest products</h2>
                        <p class="text-sm text-gray-600">Newest additions to your catalog in real time.</p>
                    </div>
                    <div class="flex flex-wrap items-center gap-3">
                        <a href="{{ route('admin.categories.index') }}" class="inline-flex items-center gap-2 rounded-full border border-indigo-200 bg-white px-4 py-2 text-xs font-semibold uppercase tracking-wide text-indigo-600 shadow-sm transition hover:bg-indigo-50">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <path d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                            Manage categories
                        </a>
                        <a href="{{ route('admin.products.index') }}" class="inline-flex items-center gap-2 rounded-full border border-indigo-200 bg-white px-4 py-2 text-xs font-semibold uppercase tracking-wide text-indigo-600 shadow-sm transition hover:bg-indigo-50">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <path d="M3 12h18"></path>
                                <path d="M3 6h18"></path>
                                <path d="M3 18h18"></path>
                            </svg>
                            Manage products
                        </a>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-indigo-100">
                        <thead class="bg-white/80">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wide text-indigo-500">Product</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wide text-indigo-500">Category</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wide text-indigo-500">Price</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wide text-indigo-500">Created</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white/90 divide-y divide-indigo-50">
                            @forelse ($latestProducts as $product)
                                <tr class="transition hover:bg-indigo-50/60">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-semibold text-gray-900">{{ $product->name }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                        {{ $product->category?->name ?? '—' }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-indigo-600">
                                        ${{ number_format($product->price, 0) }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $product->created_at->diffForHumans() }}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="px-6 py-8 text-center text-sm font-medium text-gray-500">No products found. Start by adding your first item to the catalog.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </section>

            <section class="glass-panel reveal flex h-full flex-col">
                <div class="border-b border-white/40 px-6 py-5">
                    <h2 class="text-lg font-semibold text-gray-900">Operations snapshot</h2>
                    <p class="text-sm text-gray-600">Key highlights from the latest updates.</p>
                </div>
                <div class="flex h-full flex-col gap-6 px-6 py-6">
                    @php
                        $highlightProduct = $latestProducts->first();
                    @endphp
                    @if ($highlightProduct)
                        <div class="rounded-2xl border border-indigo-100 bg-gradient-to-br from-indigo-500/10 via-white to-white p-5 shadow-inner">
                            <div class="flex items-start justify-between gap-3">
                                <div>
                                    <p class="text-xs font-semibold uppercase tracking-wide text-indigo-400">Newest product</p>
                                    <h3 class="mt-2 text-base font-semibold text-gray-900">{{ $highlightProduct->name }}</h3>
                                    <p class="text-sm text-gray-600">{{ $highlightProduct->category?->name ?? 'Uncategorized' }}</p>
                                </div>
                                <span class="rounded-full bg-indigo-600/10 px-3 py-1 text-sm font-semibold text-indigo-600">${{ number_format($highlightProduct->price, 0) }}</span>
                            </div>
                            <p class="mt-4 text-xs font-medium uppercase tracking-wide text-gray-500">Added {{ $highlightProduct->created_at->diffForHumans() }}</p>
                            <a href="{{ route('admin.products.edit', $highlightProduct) }}" class="mt-4 inline-flex items-center gap-2 text-sm font-semibold text-indigo-600 transition hover:text-indigo-500">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25z"></path>
                                    <path d="M14.06 4.94l3.75 3.75"></path>
                                </svg>
                                Update product details
                            </a>
                        </div>

                        <div>
                            <h3 class="text-xs font-semibold uppercase tracking-wide text-indigo-400">Recent activity</h3>
                            <ul class="mt-3 space-y-3">
                                @foreach ($latestProducts->skip(1)->take(4) as $product)
                                    <li class="flex items-center justify-between gap-4 rounded-2xl border border-indigo-100 bg-white/80 px-4 py-3">
                                        <div>
                                            <p class="text-sm font-semibold text-gray-900">{{ $product->name }}</p>
                                            <p class="text-xs text-gray-500">Added {{ $product->created_at->diffForHumans() }}</p>
                                        </div>
                                        <span class="rounded-full bg-indigo-600/10 px-3 py-1 text-xs font-semibold text-indigo-600">${{ number_format($product->price, 0) }}</span>
                                    </li>
                                @endforeach
                                @if ($latestProducts->count() <= 1)
                                    <li class="rounded-2xl border border-dashed border-indigo-200 px-4 py-6 text-center text-xs font-semibold uppercase tracking-wide text-indigo-300">More updates will appear as new products are added.</li>
                                @endif
                            </ul>
                        </div>
                    @else
                        <div class="flex h-full flex-col items-center justify-center gap-4 text-center text-sm text-gray-500">
                            <svg class="h-12 w-12 text-indigo-200" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <path d="M4 7h16M4 12h8m-8 5h16"></path>
                            </svg>
                            <p>No operational insights yet. Create your first product to unlock analytics.</p>
                            <a href="{{ route('admin.products.create') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-indigo-600 transition hover:text-indigo-500">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path d="M12 5v14m7-7H5"></path>
                                </svg>
                                Add a new product
                            </a>
                        </div>
                    @endif
                </div>
            </section>
        </div>
    </div>
</section>
@endsection
