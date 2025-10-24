@extends('components.layouts.app')

@section('content')
<section class="py-12 px-6 bg-gradient-to-b from-indigo-50 via-white to-indigo-50 min-h-[70vh]">
    <div class="max-w-4xl mx-auto bg-white border border-indigo-100 shadow-xl rounded-3xl p-8 space-y-8">
        <header class="space-y-2">
            <h1 class="text-3xl font-bold text-gray-900">Create product</h1>
            <p class="text-gray-600">Upload product imagery and fill in key specifications.</p>
        </header>

        @if ($errors->any())
            <div class="bg-red-50 text-red-600 text-sm rounded-xl px-4 py-3">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div class="grid gap-6 md:grid-cols-2">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                    <input id="name" name="name" value="{{ old('name') }}" required
                        class="w-full rounded-xl border border-gray-200 px-4 py-3 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200" />
                </div>

                <div>
                    <label for="price" class="block text-sm font-medium text-gray-700 mb-1">Price</label>
                    <input id="price" name="price" value="{{ old('price') }}" type="number" step="0.01" min="0" required
                        class="w-full rounded-xl border border-gray-200 px-4 py-3 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200" />
                </div>

                <div>
                    <label for="category_id" class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                    <select id="category_id" name="category_id" required
                        class="w-full rounded-xl border border-gray-200 px-4 py-3 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200">
                        <option value="">Select category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Image</label>
                    <input id="image" name="image" type="file" accept="image/*" required
                        class="w-full rounded-xl border border-gray-200 px-4 py-2 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200" />
                    <p class="mt-2 text-xs text-gray-500">Upload PNG or JPG up to 2MB.</p>
                </div>
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                <textarea id="description" name="description" rows="4"
                    class="w-full rounded-xl border border-gray-200 px-4 py-3 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200">{{ old('description') }}</textarea>
            </div>

            <div class="grid gap-6 md:grid-cols-2">
                <div>
                    <label for="engine_type" class="block text-sm font-medium text-gray-700 mb-1">Engine type</label>
                    <input id="engine_type" name="engine_type" value="{{ old('engine_type') }}" required
                        class="w-full rounded-xl border border-gray-200 px-4 py-3 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200" />
                </div>
                <div>
                    <label for="transmission" class="block text-sm font-medium text-gray-700 mb-1">Transmission</label>
                    <input id="transmission" name="transmission" value="{{ old('transmission') }}" required
                        class="w-full rounded-xl border border-gray-200 px-4 py-3 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200" />
                </div>
                <div>
                    <label for="capacity" class="block text-sm font-medium text-gray-700 mb-1">Capacity</label>
                    <input id="capacity" name="capacity" value="{{ old('capacity') }}" required
                        class="w-full rounded-xl border border-gray-200 px-4 py-3 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200" />
                </div>
                <div>
                    <label for="gasoline" class="block text-sm font-medium text-gray-700 mb-1">Fuel</label>
                    <input id="gasoline" name="gasoline" value="{{ old('gasoline') }}" required
                        class="w-full rounded-xl border border-gray-200 px-4 py-3 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200" />
                </div>
                <div class="md:col-span-2">
                    <label for="horsepower" class="block text-sm font-medium text-gray-700 mb-1">Horsepower</label>
                    <input id="horsepower" name="horsepower" value="{{ old('horsepower') }}"
                        class="w-full rounded-xl border border-gray-200 px-4 py-3 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200" />
                </div>
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-end gap-3">
                <a href="{{ route('admin.products.index') }}" class="inline-flex items-center justify-center px-5 py-2.5 rounded-xl border border-gray-200 text-sm font-medium text-gray-600 hover:bg-gray-50">Cancel</a>
                <button type="submit" class="inline-flex items-center justify-center px-6 py-2.5 rounded-xl bg-indigo-600 hover:bg-indigo-700 text-white font-semibold shadow-lg">Save product</button>
            </div>
        </form>
    </div>
</section>
@endsection
