@extends('components.layouts.app')

@section('content')
<section class="py-12 px-6 bg-gradient-to-b from-indigo-50 via-white to-indigo-50 min-h-[70vh]">
    <div class="max-w-3xl mx-auto glass-panel p-8 space-y-6 reveal">
        <header class="space-y-2">
            <h1 class="text-3xl font-bold text-gray-900">Edit category</h1>
            <p class="text-gray-600">Rename or adjust existing category.</p>
        </header>

        @if ($errors->any())
            <div class="rounded-xl border border-rose-200 bg-rose-50 px-4 py-3 text-sm text-rose-600">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('admin.categories.update', $category) }}" class="space-y-6">
            @csrf
            @method('PUT')
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                <input id="name" name="name" value="{{ old('name', $category->name) }}" required
                    class="w-full rounded-xl border border-gray-200 px-4 py-3 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200" />
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-end gap-3">
                <a href="{{ route('admin.categories.index') }}" class="inline-flex items-center justify-center px-5 py-2.5 rounded-xl border border-gray-200 text-sm font-medium text-gray-600 hover:bg-gray-50">Cancel</a>
                <button type="submit" class="btn-primary px-6 py-2.5">Update category</button>
            </div>
        </form>
    </div>
</section>
@endsection
