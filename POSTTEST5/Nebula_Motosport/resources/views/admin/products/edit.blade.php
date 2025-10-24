@extends('components.layouts.app')

@php
    use Illuminate\Support\Facades\Storage;
    use Illuminate\Support\Str;
    $currentImage = Str::startsWith($product->image, ['http://', 'https://'])
        ? $product->image
        : asset('storage/' . $product->image);
@endphp

@section('content')
<section class="py-12 px-6 bg-gradient-to-b from-indigo-50 via-white to-indigo-50 min-h-[70vh]">
    <div class="max-w-4xl mx-auto bg-white border border-indigo-100 shadow-xl rounded-3xl p-8 space-y-8">
        <header class="space-y-2">
            <h1 class="text-3xl font-bold text-gray-900">Edit product</h1>
            <p class="text-gray-600">Update product details or replace its media.</p>
        </header>

        @if ($errors->any())
            <div class="bg-red-50 text-red-600 text-sm rounded-xl px-4 py-3">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('admin.products.update', $product) }}" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            <div class="grid gap-6 md:grid-cols-2">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                    <input id="name" name="name" value="{{ old('name', $product->name) }}" required
                        class="w-full rounded-xl border border-gray-200 px-4 py-3 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200" />
                </div>

                <div>
                    <label for="price" class="block text-sm font-medium text-gray-700 mb-1">Price</label>
                    <input id="price" name="price" value="{{ old('price', $product->price) }}" type="number" step="0.01" min="0" required
                        class="w-full rounded-xl border border-gray-200 px-4 py-3 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200" />
                </div>

                <div>
                    <label for="category_id" class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                    <select id="category_id" name="category_id" required
                        class="w-full rounded-xl border border-gray-200 px-4 py-3 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @selected(old('category_id', $product->category_id) == $category->id)>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Image</label>
                    <input id="image" name="image" type="file" accept="image/*"
                        class="w-full rounded-xl border border-gray-200 px-4 py-2 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200" />
                    <p class="mt-2 text-xs text-gray-500">Upload PNG or JPG up to 2MB. Leave empty to keep current image.</p>
                </div>
            </div>

            <div class="flex items-center gap-4">
                <img src="{{ $currentImage }}" alt="{{ $product->name }}" class="h-24 w-24 rounded-xl object-cover border border-gray-200" />
                <span class="text-sm text-gray-500">Current image preview</span>
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                <textarea id="description" name="description" rows="4"
                    class="w-full rounded-xl border border-gray-200 px-4 py-3 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200">{{ old('description', $product->details->description ?? '') }}</textarea>
            </div>

            <div class="grid gap-6 md:grid-cols-2">
                <div>
                    <label for="engine_type" class="block text-sm font-medium text-gray-700 mb-1">Engine type</label>
                    <input id="engine_type" name="engine_type" value="{{ old('engine_type', $product->details->engine_type ?? '') }}" required
                        class="w-full rounded-xl border border-gray-200 px-4 py-3 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200" />
                </div>
                <div>
                    <label for="transmission" class="block text-sm font-medium text-gray-700 mb-1">Transmission</label>
                    <input id="transmission" name="transmission" value="{{ old('transmission', $product->details->transmission ?? '') }}" required
                        class="w-full rounded-xl border border-gray-200 px-4 py-3 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200" />
                </div>
                <div>
                    <label for="capacity" class="block text-sm font-medium text-gray-700 mb-1">Capacity</label>
                    <input id="capacity" name="capacity" value="{{ old('capacity', $product->details->capacity ?? '') }}" required
                        class="w-full rounded-xl border border-gray-200 px-4 py-3 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200" />
                </div>
                <div>
                    <label for="gasoline" class="block text-sm font-medium text-gray-700 mb-1">Fuel</label>
                    <input id="gasoline" name="gasoline" value="{{ old('gasoline', $product->details->gasoline ?? '') }}" required
                        class="w-full rounded-xl border border-gray-200 px-4 py-3 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200" />
                </div>
                <div class="md:col-span-2">
                    <label for="horsepower" class="block text-sm font-medium text-gray-700 mb-1">Horsepower</label>
                    <input id="horsepower" name="horsepower" value="{{ old('horsepower', $product->details->horsepower ?? '') }}"
                        class="w-full rounded-xl border border-gray-200 px-4 py-3 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200" />
                </div>
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-end gap-3">
                <a href="{{ route('admin.products.index') }}" class="inline-flex items-center justify-center px-5 py-2.5 rounded-xl border border-gray-200 text-sm font-medium text-gray-600 hover:bg-gray-50">Cancel</a>
                <button type="submit" class="inline-flex items-center justify-center px-6 py-2.5 rounded-xl bg-indigo-600 hover:bg-indigo-700 text-white font-semibold shadow-lg">Update product</button>
            </div>
        </form>
    </div>
</section>
@endsection
