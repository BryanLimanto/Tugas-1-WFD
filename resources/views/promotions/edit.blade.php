@extends('layouts.app')

@section('title', 'Edit Promotion')

@section('content')
    <div class="bg-white rounded-lg shadow-md p-6 max-w-2xl mx-auto">
        <h1 class="text-2xl font-bold mb-6">Edit Promotion</h1>
        
        <form action="{{ route('promotions.update', $promotion) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-medium mb-2">Title</label>
                <input type="text" name="title" id="title" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('title', $promotion->title) }}" required>
            </div>
            
            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-medium mb-2">Description</label>
                <textarea name="description" id="description" rows="4" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>{{ old('description', $promotion->description) }}</textarea>
            </div>
            
            <div class="mb-4">
                <label for="image" class="block text-gray-700 font-medium mb-2">Promotion Image</label>
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $promotion->image) }}" alt="Current image" class="h-32">
                </div>
                <input type="file" name="image" id="image" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" accept="image/*">
                <p class="text-sm text-gray-500 mt-1">Leave blank to keep current image</p>
            </div>
            
            <div class="flex justify-between">
                <a href="{{ route('promotions.index') }}" class="px-6 py-2 bg-gray-300 text-gray-800 rounded-lg hover:bg-gray-400 transition">Cancel</a>
                <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">Update Promotion</button>
            </div>
        </form>
    </div>
@endsection