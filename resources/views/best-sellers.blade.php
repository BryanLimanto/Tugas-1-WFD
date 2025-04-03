@extends('layouts.app')

@section('title', 'Best Sellers - BookPromo')

@section('content')
    <!-- Hero Section -->
    <div class="relative bg-blue-800 text-white py-20 mb-12 rounded-lg overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-900 to-blue-600 opacity-90"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl mb-4">Buku Terlaris</h1>
            <p class="max-w-2xl mx-auto text-xl text-blue-100">Buku-buku paling hits yang wajib banget lo baca! 😎📖</p>
        </div>
    </div>

    <!-- Filter Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-8">
        <div class="bg-white rounded-xl shadow-sm p-6">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                <h2 class="text-xl font-semibold text-gray-800 mb-4 md:mb-0">Filter Books</h2>
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                    <select class="rounded-lg border-gray-300 text-sm focus:border-blue-500 focus:ring-blue-500">
                        <option>All Categories</option>
                        <option>Fiction</option>
                        <option>Non-Fiction</option>
                        <option>Children</option>
                        <option>Science</option>
                    </select>
                    <select class="rounded-lg border-gray-300 text-sm focus:border-blue-500 focus:ring-blue-500">
                        <option>Sort By</option>
                        <option>Popularity</option>
                        <option>Newest</option>
                        <option>Price: Low to High</option>
                        <option>Price: High to Low</option>
                    </select>
                    <select class="rounded-lg border-gray-300 text-sm focus:border-blue-500 focus:ring-blue-500">
                        <option>All Formats</option>
                        <option>Hardcover</option>
                        <option>Paperback</option>
                        <option>E-book</option>
                    </select>
                    <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition duration-300">
                        Apply Filters
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Best Sellers List -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-16">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            <!-- Buku 1 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300 group">
                <div class="relative">
                    <img class="w-full h-64 object-cover" src="https://cdn.gramedia.com/uploads/items/9786020649320_the_midnight_library_cov.jpg" alt="Book cover">
                    <div class="absolute top-4 left-4 bg-yellow-500 text-white text-xs font-bold px-2 py-1 rounded-full">BESTSELLER</div>
                    <div class="absolute top-4 right-4 bg-white/90 hover:bg-white text-gray-800 w-8 h-8 rounded-full flex items-center justify-center transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-yellow-400 mb-2">
                        @for($i = 0; $i < 5; $i++)
                            <svg class="w-4 h-4 {{ $i < 4 ? 'fill-current' : 'fill-gray-300' }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                            </svg>
                        @endfor
                        <span class="text-gray-500 text-xs ml-1">(128)</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-1">The Midnight Library</h3>
                    <p class="text-gray-600 text-sm mb-4">by Matt Haig</p>
                </div>
            </div>

            <!-- Buku 2 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300 group">
                <div class="relative">
                    <img class="w-full h-64 object-cover" src="https://ebook.bungatujuh.sch.id/lib/minigalnano/createthumb.php?filename=images/docs/cover_atomic_habits_perubahan_kecil_yang_memberikan_hasil_luar_biasa.jpg&width=200" alt="Book cover">
                    <div class="absolute top-4 left-4 bg-yellow-500 text-white text-xs font-bold px-2 py-1 rounded-full">BESTSELLER</div>
                    <div class="absolute top-4 right-4 bg-white/90 hover:bg-white text-gray-800 w-8 h-8 rounded-full flex items-center justify-center transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-yellow-400 mb-2">
                        @for($i = 0; $i < 5; $i++)
                            <svg class="w-4 h-4 {{ $i < 5 ? 'fill-current' : 'fill-gray-300' }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                            </svg>
                        @endfor
                        <span class="text-gray-500 text-xs ml-1">(256)</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-1">Atomic Habits</h3>
                    <p class="text-gray-600 text-sm mb-4">by James Clear</p>
                </div>
            </div>

            <!-- Buku 3 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300 group">
                <div class="relative">
                    <img class="w-full h-64 object-cover" src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1582135294i/36809135.jpg" alt="Book cover">
                    <div class="absolute top-4 left-4 bg-yellow-500 text-white text-xs font-bold px-2 py-1 rounded-full">BESTSELLER</div>
                    <div class="absolute top-4 right-4 bg-white/90 hover:bg-white text-gray-800 w-8 h-8 rounded-full flex items-center justify-center transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-yellow-400 mb-2">
                        @for($i = 0; $i < 5; $i++)
                            <svg class="w-4 h-4 {{ $i < 4 ? 'fill-current' : 'fill-gray-300' }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                            </svg>
                        @endfor
                        <span class="text-gray-500 text-xs ml-1">(89)</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-1">Where the Crawdads Sing</h3>
                    <p class="text-gray-600 text-sm mb-4">by Delia Owens</p>
                </div>
            </div>

            <!-- Buku 4 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300 group">
                <div class="relative">
                    <img class="w-full h-64 object-cover" src="https://elibrary.bsi.ac.id/assets/images/buku/230460.jpg" alt="Book cover">
                    <div class="absolute top-4 left-4 bg-yellow-500 text-white text-xs font-bold px-2 py-1 rounded-full">BESTSELLER</div>
                    <div class="absolute top-4 right-4 bg-white/90 hover:bg-white text-gray-800 w-8 h-8 rounded-full flex items-center justify-center transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-yellow-400 mb-2">
                        @for($i = 0; $i < 5; $i++)
                            <svg class="w-4 h-4 {{ $i < 5 ? 'fill-current' : 'fill-gray-300' }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                            </svg>
                        @endfor
                        <span class="text-gray-500 text-xs ml-1">(342)</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-1">The Psychology of Money</h3>
                    <p class="text-gray-600 text-sm mb-4">by Morgan Housel</p>
                </div>
            </div>
        </div>
    </div>
@endsection