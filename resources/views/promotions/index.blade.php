@extends('layouts.app')

@section('title', 'Book Promotions')

@section('content')
    <!-- Hero Section -->
    <div class="relative bg-blue-800 text-white py-24 mb-16 rounded-xl overflow-hidden isolate">
    <!-- Animated gradient background -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-900 via-blue-700 to-blue-600 opacity-90 animate-gradient-shift"></div>
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1507842217343-583bb7270b66?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80')] bg-cover bg-center mix-blend-overlay opacity-20"></div>
    </div>

    <!-- Floating book elements -->
    <div class="absolute -bottom-20 -left-20 w-64 h-64 bg-blue-400 rounded-full filter blur-3xl opacity-20 animate-float-slow"></div>
    <div class="absolute -top-20 -right-20 w-64 h-64 bg-blue-500 rounded-full filter blur-3xl opacity-20 animate-float-medium"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10">
        <div class="text-center space-y-6">
        <h1 class="text-5xl font-extrabold tracking-tight sm:text-6xl lg:text-7xl mb-4 animate-fade-in-up">
            <span class="block">Temukan Promo</span>
            <span class="block text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 to-yellow-100">Buku Terbaik!</span>
        </h1>
        
        <p class="max-w-2xl mx-auto text-xl text-blue-100/90 animate-fade-in-up delay-100">
            Baca lebih banyak, bayar lebih hemat! 📚💸
        </p>

        <!-- Interactive search bar -->
        <div class="max-w-md mx-auto mt-8 animate-fade-in-up delay-200">
            <form action="{{ route('promotions.index') }}" method="GET">
                <div class="relative">
                <input 
                    type="text" 
                    name="search"
                    value="{{ $search ?? '' }}"
                    placeholder="Cari Promosi Buku..." 
                    class="w-full py-4 px-6 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 focus:outline-none focus:ring-2 focus:ring-yellow-300 focus:border-transparent placeholder-blue-200/70 transition-all duration-300 hover:bg-white/15"
                >
                <button type="submit" class="absolute right-2 top-1/2 -translate-y-1/2 bg-yellow-400 hover:bg-yellow-300 text-blue-900 rounded-full p-3 transition-all duration-300 transform hover:scale-105">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
            </div>
        </form>
    </div>

        <!-- Floating action buttons -->
        <div class="flex justify-center space-x-4 mt-8 animate-fade-in-up delay-300">
        <a href="https://www.gramedia.com" target="_blank"
        class="px-6 py-3 bg-white text-blue-800 font-semibold rounded-full hover:bg-gray-100 transition-all duration-300 transform hover:-translate-y-1 shadow-lg hover:shadow-xl">
        Belanja Sekarang
        </a>

            <a href="{{ route('promotions.create') }}" class="px-6 py-3 bg-transparent border-2 border-white text-white font-semibold rounded-full hover:bg-white/10 transition-all duration-300 transform hover:-translate-y-1">
            Tambah Promosi
            </a>
        </div>
        </div>
    </div>

    <!-- Scrolling indicator -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce">
        <svg class="w-8 h-8 text-white/70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </div>
    </div>

    <!-- Categories Section -->
    <div class="mb-12">
        <h2 class="text-2xl font-bold mb-6 text-gray-800 border-b pb-2">Cari Buku Sesuai Selera Lo!</h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
            <a href="{{ route('categories') }}?category=fiction" class="bg-white rounded-lg shadow-sm p-4 text-center hover:shadow-md transition duration-300">
                <div class="w-16 h-16 mx-auto mb-3 bg-blue-100 rounded-full flex items-center justify-center text-blue-600">
                    <i class="fas fa-book-open text-xl"></i>
                </div>
                <h3 class="font-medium text-gray-800">Fiksi</h3>
            </a>
            <a href="{{ route('categories') }}?category=non-fiction" class="bg-white rounded-lg shadow-sm p-4 text-center hover:shadow-md transition duration-300">
                <div class="w-16 h-16 mx-auto mb-3 bg-green-100 rounded-full flex items-center justify-center text-green-600">
                    <i class="fas fa-scroll text-xl"></i>
                </div>
                <h3 class="font-medium text-gray-800">Non-Fiksi</h3>
            </a>
            <a href="{{ route('categories') }}?category=science" class="bg-white rounded-lg shadow-sm p-4 text-center hover:shadow-md transition duration-300">
                <div class="w-16 h-16 mx-auto mb-3 bg-purple-100 rounded-full flex items-center justify-center text-purple-600">
                    <i class="fas fa-atom text-xl"></i>
                </div>
                <h3 class="font-medium text-gray-800">Sains</h3>
            </a>
            <a href="{{ route('categories') }}?category=children" class="bg-white rounded-lg shadow-sm p-4 text-center hover:shadow-md transition duration-300">
                <div class="w-16 h-16 mx-auto mb-3 bg-yellow-100 rounded-full flex items-center justify-center text-yellow-600">
                    <i class="fas fa-child text-xl"></i>
                </div>
                <h3 class="font-medium text-gray-800">Anak-Anak</h3>
            </a>
            <a href="{{ route('categories') }}?category=business" class="bg-white rounded-lg shadow-sm p-4 text-center hover:shadow-md transition duration-300">
                <div class="w-16 h-16 mx-auto mb-3 bg-red-100 rounded-full flex items-center justify-center text-red-600">
                    <i class="fas fa-chart-line text-xl"></i>
                </div>
                <h3 class="font-medium text-gray-800">Bisnis</h3>
            </a>
            <a href="{{ route('categories') }}" class="bg-white rounded-lg shadow-sm p-4 text-center hover:shadow-md transition duration-300">
                <div class="w-16 h-16 mx-auto mb-3 bg-gray-100 rounded-full flex items-center justify-center text-gray-600">
                    <i class="fas fa-ellipsis-h text-xl"></i>
                </div>
                <h3 class="font-medium text-gray-800">View All</h3>
            </a>
        </div>
    </div>

    <!-- Featured Promotions Slider -->
    <div class="mb-16">
        <h2 class="text-2xl font-bold mb-6 text-gray-800 border-b pb-2">Promo Menarik buat Lo!</h2>
        
        @if($promotions->count() > 0)
        <div class="splide promotions-slider relative rounded-xl overflow-hidden shadow-xl">
            <div class="splide__track">
                <div class="splide__list">
                    @foreach($promotions as $promotion)
                        <div class="splide__slide group">
                            <div class="relative rounded-lg overflow-hidden h-96">
                                <img src="{{ asset('storage/' . $promotion->image) }}" 
                                     alt="{{ $promotion->title }}" 
                                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                                
                                <span class="absolute top-4 left-4 bg-red-600 text-white text-xs font-semibold px-2.5 py-0.5 rounded-full z-10">HOT DEAL</span>
                                
                                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent 
                                            opacity-0 group-hover:opacity-100 transition-opacity duration-300 
                                            flex items-end p-8">
                                    <div class="transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                                        <h2 class="text-3xl font-bold text-white mb-2">{{ $promotion->title }}</h2>
                                        <p class="text-white/90 mb-4">{{ Str::limit($promotion->description, 120) }}</p>
                                        <div class="flex">
                                            <a href="{{ route('promotions.show', $promotion) }}" 
                                            class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-medium transition duration-300 transform hover:scale-105">
                                                View Details
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            
            <!-- Navigation arrows -->
            <div class="splide__arrows">
                <button class="splide__arrow splide__arrow--prev !left-4 !bg-black/30 !backdrop-blur-sm !w-12 !h-12 !rounded-full hover:!bg-black/50">
                    <i class="fas fa-chevron-left text-white text-xl"></i>
                </button>
                <button class="splide__arrow splide__arrow--next !right-4 !bg-black/30 !backdrop-blur-sm !w-12 !h-12 !rounded-full hover:!bg-black/50">
                    <i class="fas fa-chevron-right text-white text-xl"></i>
                </button>
            </div>
            
            <!-- Pagination -->
            <ul class="splide__pagination !bottom-4"></ul>
        </div>
        @else
        <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm text-yellow-700">
                        Tidak ada promosi yang tersedia. <a href="{{ route('promotions.create') }}" class="font-medium underline text-yellow-700 hover:text-yellow-600">Tambahkan promosi baru</a>.
                    </p>
                </div>
            </div>
        </div>
        @endif
    </div>
        <!-- Tambahkan setelah Featured Promotions Slider -->
    @if(request()->has('search') && $search)
        <div class="mb-8">
            <h2 class="text-2xl font-bold mb-4 text-gray-800">
                Search Results for: "{{ $search }}"
                <span class="text-sm font-normal text-gray-500">({{ $promotions->count() }} results)</span>
            </h2>
            
            @if($promotions->isEmpty())
                <div class="bg-blue-50 border-l-4 border-blue-400 p-4 rounded-lg">
                    <div class="flex items-center">
                        <svg class="h-5 w-5 text-blue-400 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2h-1V9z" clip-rule="evenodd" />
                        </svg>
                        <p class="text-sm text-blue-700">
                            No promotions found matching your search. Try different keywords.
                        </p>
                    </div>
                </div>
            @endif
        </div>
    @endif
    <!-- All Promotions -->
    <div class="mb-16">
        <h2 class="text-3xl font-bold mb-8 text-gray-800 relative pb-4">
            Semua Promosi
            <span class="absolute bottom-0 left-0 w-20 h-1 bg-blue-600 rounded-full"></span>
        </h2>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            @foreach($promotions as $promotion)
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 group">
                    <!-- Image -->
                    <div class="relative overflow-hidden h-48">
                        <img src="{{ asset('storage/' . $promotion->image) }}" 
                            alt="{{ $promotion->title }}" 
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    
                    <!-- Content -->
                    <div class="p-6">
                        <!-- Title -->
                        <h3 class="text-lg font-semibold text-gray-800 mb-2 group-hover:text-blue-600 transition-colors duration-300">
                            {{ $promotion->title }}
                        </h3>
                        
                        <!-- View Details Button -->
                        <div class="mt-4">
                            <a href="{{ route('promotions.show', $promotion) }}" 
                            class="block w-full py-2 text-center bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-medium transition duration-300">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    <!-- Call to Action -->
    <div class="relative bg-gradient-to-r from-blue-600 to-blue-800 rounded-2xl p-8 text-center text-white mb-16 overflow-hidden">
        <!-- Efek latar belakang dinamis -->
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-0 left-0 w-32 h-32 bg-blue-400 rounded-full filter blur-3xl animate-float-slow"></div>
            <div class="absolute bottom-0 right-0 w-40 h-40 bg-blue-500 rounded-full filter blur-3xl animate-float-medium"></div>
        </div>
        
        <div class="relative z-10">
            <h2 class="text-3xl font-bold mb-4 animate-fade-in-up">
                <span class="block">Ingin Mempromosikan Buku Anda?</span>
                <span class="block text-yellow-300 mt-2">Raih Lebih Banyak Pembaca!</span>
            </h2>
            
            <p class="max-w-2xl mx-auto mb-8 text-lg text-blue-100 animate-fade-in-up delay-100">
                Bergabunglah dengan ribuan penerbit dan penulis yang telah meningkatkan penjualan mereka melalui platform promosi kami.
            </p>
            
            <div class="flex flex-col sm:flex-row justify-center gap-4 animate-fade-in-up delay-200">
                <a href="{{ route('promotions.create') }}" 
                class="px-8 py-4 bg-white text-blue-800 font-bold rounded-xl hover:bg-gray-100 transition-all duration-300 transform hover:-translate-y-1 shadow-lg hover:shadow-xl flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                    Tambah Promosi Sekarang
                </a>
                
                <a href="https://www.gramedia.com" target="_blank" 
                class="px-8 py-4 border-2 border-white text-white font-bold rounded-xl hover:bg-white/10 transition-all duration-300 transform hover:-translate-y-1 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    Belanja Sekarang
                </a>
            </div>
            
            <!-- Testimoni kecil -->
            <div class="mt-8 flex items-center justify-center space-x-2 text-blue-200 animate-fade-in-up delay-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
                <span class="text-sm">Lebih dari 1.000 promosi aktif setiap bulan</span>
            </div>
        </div>
    </div>

    @push('styles')
    <style>
        /* Animasi */
        @keyframes float-slow {
            0%, 100% { transform: translateY(0) translateX(0); }
            50% { transform: translateY(-20px) translateX(10px); }
        }
        
        @keyframes float-medium {
            0%, 100% { transform: translateY(0) translateX(0); }
            50% { transform: translateY(10px) translateX(-15px); }
        }
        
        @keyframes fade-in-up {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .animate-float-slow {
            animation: float-slow 8s ease-in-out infinite;
        }
        
        .animate-float-medium {
            animation: float-medium 6s ease-in-out infinite;
        }
        
        .animate-fade-in-up {
            animation: fade-in-up 0.6s ease-out forwards;
        }
        
        .animate-fade-in-up.delay-100 {
            animation-delay: 0.1s;
        }
        
        .animate-fade-in-up.delay-200 {
            animation-delay: 0.2s;
        }
        
        .animate-fade-in-up.delay-300 {
            animation-delay: 0.3s;
        }
    </style>
    @endpush
@endsection

@push('styles')
    <style>
        /* Custom Splide Styles */
        .splide__arrow {
            opacity: 1;
            background: none;
            width: 3rem;
            height: 3rem;
        }
        
        .splide__pagination__page {
            background: white;
            opacity: 0.5;
            width: 12px;
            height: 12px;
        }
        
        .splide__pagination__page.is-active {
            opacity: 1;
            transform: scale(1);
            background: white;
        }
        
        .promotions-slider {
            height: 24rem;
        }
        
        .splide__slide {
            padding: 0 0.5rem;
        }
        
        .splide__slide img {
            height: 100%;
            width: 100%;
            object-fit: cover;
        }
    </style>
@endpush
