@extends('layouts.app')

@section('title', $category['name'] . ' - BookPromo')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <!-- Category Header -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-2">{{ $category['name'] }}</h1>
        <p class="text-gray-600">{{ $category['description'] }}</p>
    </div>

    <!-- Featured Books -->
    <div class="mb-12">
        <h2 class="text-2xl font-bold mb-6 text-gray-800 border-b pb-2">Featured Books</h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
            <!-- Contoh buku 1 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                <div class="relative h-48">
                    <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                         alt="Book cover" 
                         class="w-full h-full object-cover">
                    <div class="absolute top-2 right-2 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-full">-20%</div>
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800 mb-1">Book Title</h3>
                    <p class="text-gray-600 text-sm mb-2">by Author Name</p>
                    <div class="flex items-center text-yellow-400 mb-2 text-sm">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <span class="text-gray-500 text-xs ml-1">(24)</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-blue-600 font-bold">$12.99</span>
                        <button class="text-blue-600 hover:text-blue-800">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Contoh buku 2 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                <div class="relative h-48">
                    <img src="https://images.unsplash.com/photo-1589998059171-988d887df646?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                         alt="Book cover" 
                         class="w-full h-full object-cover">
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800 mb-1">Another Book</h3>
                    <p class="text-gray-600 text-sm mb-2">by Another Author</p>
                    <div class="flex items-center text-yellow-400 mb-2 text-sm">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <i class="far fa-star"></i>
                        <span class="text-gray-500 text-xs ml-1">(18)</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-blue-600 font-bold">$15.99</span>
                        <button class="text-blue-600 hover:text-blue-800">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Tambahkan lebih banyak buku sesuai kebutuhan -->
        </div>
    </div>

    <!-- Promotions -->
    <div class="mb-12">
        <h2 class="text-2xl font-bold mb-6 text-gray-800 border-b pb-2">Special Promotions</h2>
        <div class="bg-blue-50 rounded-xl p-6">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/3 mb-4 md:mb-0">
                    <img src="https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                         alt="Promotion" 
                         class="w-full rounded-lg">
                </div>
                <div class="md:w-2/3 md:pl-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Special Discount for {{ $category['name'] }} Books</h3>
                    <p class="text-gray-600 mb-4">Get up to 30% off on selected {{ $category['name'] }} books this month. Limited time offer!</p>
                    <a href="#" class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-medium">
                        View All Promotions
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection