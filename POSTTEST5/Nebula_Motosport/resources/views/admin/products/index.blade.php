@extends('components.layouts.app')

@php
    use Illuminate\Support\Facades\Storage;
    use Illuminate\Support\Str;
@endphp

@section('content')
<section class="py-12 px-6 bg-gradient-to-b from-indigo-50 via-white to-indigo-50 min-h-[70vh]">
    <div class="max-w-7xl mx-auto space-y-8">
        <header class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 reveal">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">Products</h1>
                <p class="text-gray-600">Manage catalogue, images, and specifications.</p>
            </div>
            <a href="{{ route('admin.products.create') }}" class="btn-primary reveal delay-75">
                <span>Create product</span>
            </a>
        </header>

        @if (session('status'))
            <div class="glass-panel text-sm text-emerald-600 reveal">
                {{ session('status') }}
            </div>
        @endif

        <form method="GET" class="glass-panel p-6 flex flex-col md:flex-row md:items-center md:justify-between gap-4 reveal">
            <div class="flex-1">
                <label for="search" class="sr-only">Search</label>
                <input id="search" name="search" value="{{ $search }}" placeholder="Search by name or category"
                    class="w-full rounded-xl border border-gray-200 px-4 py-3 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200" />
            </div>
            <button type="submit" class="inline-flex items-center justify-center gap-2 rounded-xl bg-slate-900 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-slate-800">
                Search
            </button>
        </form>

        <div class="glass-panel overflow-hidden reveal">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">Image</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">Name</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">Category</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">Price</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">Updated</th>
                            <th class="px-6 py-3 text-right text-xs font-semibold text-gray-500 uppercase">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-100">
                        @forelse ($products as $product)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @php
                                        $image = Str::startsWith($product->image, ['http://', 'https://'])
                                            ? $product->image
                                            : asset('storage/' . $product->image);
                                    @endphp
                                    <img src="{{ $image }}" alt="{{ $product->name }}" class="h-14 w-14 rounded-xl object-cover" />
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-semibold text-gray-900">{{ $product->name }}</div>
                                    <div class="text-xs text-gray-500 line-clamp-1 max-w-[280px]">
                                        {{ $product->details->description ?? '—' }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                    {{ $product->category?->name ?? '—' }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    ${{ number_format($product->price, 0) }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $product->updated_at->diffForHumans() }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <div class="flex items-center justify-end gap-3">
                                        <a href="{{ route('admin.products.edit', $product) }}" class="text-indigo-600 hover:text-indigo-500">Edit</a>
                                        <form method="POST" action="{{ route('admin.products.destroy', $product) }}" class="inline-block" onsubmit="return confirm('Delete this product?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-500">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-6 py-4 text-center text-sm text-gray-500">No products found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="px-6 py-4 border-t border-white/40">
                {{ $products->links() }}
            </div>
        </div>
    </div>
</section>
@endsection
