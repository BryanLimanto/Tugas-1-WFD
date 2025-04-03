@extends('layouts.app')

@section('title', $promotion->title)

@section('content')
    <div class="bg-white rounded-lg shadow-md overflow-hidden max-w-3xl mx-auto">
        <img src="{{ asset('storage/' . $promotion->image) }}" alt="{{ $promotion->title }}" class="w-full h-64 object-cover">
        <div class="p-6">
            <h1 class="text-3xl font-bold mb-4">{{ $promotion->title }}</h1>
            <p class="text-gray-700 mb-6">{{ $promotion->description }}</p>
            <div class="flex justify-between items-center">
                <span class="text-gray-500">Posted {{ $promotion->created_at->diffForHumans() }}</span>
                <div class="flex space-x-4">
                    <a href="{{ route('promotions.edit', $promotion) }}" class="px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600 transition">Edit</a>
                    <form action="{{ route('promotions.destroy', $promotion) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 transition">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-6">
        <a href="{{ route('promotions.index') }}" class="text-blue-600 hover:text-blue-800">&larr; Back to all promotions</a>
    </div>
@endsection