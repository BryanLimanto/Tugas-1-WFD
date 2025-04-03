@extends('layouts.app')

@section('title', 'Kategori Buku - BookPromo')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <!-- Header Section -->
    <div class="mb-12 text-center">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">
            <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-indigo-600">
                Jelajahi Kategori Buku
            </span>
        </h1>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            Temukan berbagai kategori buku untuk menemukan bacaan favorit Anda berikutnya
        </p>
        
        <!-- Search Bar -->
        <div class="max-w-2xl mx-auto mt-8">
            <div class="relative">
                <input 
                    type="text" 
                    placeholder="Cari kategori buku..." 
                    class="w-full py-3 px-6 rounded-full border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent shadow-sm transition-all duration-300 hover:shadow-md"
                >
                <button class="absolute right-3 top-1/2 transform -translate-y-1/2 text-blue-600 hover:text-blue-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Category Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
        <!-- Fiction -->
        <a href="#" class="group">
            <div class="relative overflow-hidden rounded-xl shadow-lg h-full transition-all duration-500 hover:shadow-2xl">
                <div class="h-40 bg-gradient-to-br from-blue-500 to-blue-700 flex items-center justify-center transition-all duration-500 group-hover:opacity-90">
                    <i class="fas fa-book-open text-5xl text-white opacity-90 group-hover:opacity-100 transition-opacity duration-300"></i>
                </div>
                <div class="p-5 bg-white">
                    <h3 class="text-lg font-bold text-gray-800 mb-2 group-hover:text-blue-600 transition-colors">Fiksi</h3>
                    <p class="text-gray-600 text-sm mb-3">Novel dan cerita imajinatif</p>
                    <span class="inline-block px-2 py-1 bg-blue-100 text-blue-800 text-xs font-semibold rounded-full">245+ Buku</span>
                </div>
            </div>
        </a>

        <!-- Non-Fiction -->
        <a href="#" class="group">
            <div class="relative overflow-hidden rounded-xl shadow-lg h-full transition-all duration-500 hover:shadow-2xl">
                <div class="h-40 bg-gradient-to-br from-green-500 to-green-700 flex items-center justify-center transition-all duration-500 group-hover:opacity-90">
                    <i class="fas fa-scroll text-5xl text-white opacity-90 group-hover:opacity-100 transition-opacity duration-300"></i>
                </div>
                <div class="p-5 bg-white">
                    <h3 class="text-lg font-bold text-gray-800 mb-2 group-hover:text-green-600 transition-colors">Non-Fiksi</h3>
                    <p class="text-gray-600 text-sm mb-3">Berdasarkan fakta dan data</p>
                    <span class="inline-block px-2 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full">189+ Buku</span>
                </div>
            </div>
        </a>

        <!-- Science -->
        <a href="#" class="group">
            <div class="relative overflow-hidden rounded-xl shadow-lg h-full transition-all duration-500 hover:shadow-2xl">
                <div class="h-40 bg-gradient-to-br from-purple-500 to-purple-700 flex items-center justify-center transition-all duration-500 group-hover:opacity-90">
                    <i class="fas fa-atom text-5xl text-white opacity-90 group-hover:opacity-100 transition-opacity duration-300"></i>
                </div>
                <div class="p-5 bg-white">
                    <h3 class="text-lg font-bold text-gray-800 mb-2 group-hover:text-purple-600 transition-colors">Sains</h3>
                    <p class="text-gray-600 text-sm mb-3">Pengetahuan ilmiah</p>
                    <span class="inline-block px-2 py-1 bg-purple-100 text-purple-800 text-xs font-semibold rounded-full">132+ Buku</span>
                </div>
            </div>
        </a>

        <!-- Children -->
        <a href="#" class="group">
            <div class="relative overflow-hidden rounded-xl shadow-lg h-full transition-all duration-500 hover:shadow-2xl">
                <div class="h-40 bg-gradient-to-br from-yellow-400 to-yellow-600 flex items-center justify-center transition-all duration-500 group-hover:opacity-90">
                    <i class="fas fa-child text-5xl text-white opacity-90 group-hover:opacity-100 transition-opacity duration-300"></i>
                </div>
                <div class="p-5 bg-white">
                    <h3 class="text-lg font-bold text-gray-800 mb-2 group-hover:text-yellow-600 transition-colors">Anak-Anak</h3>
                    <p class="text-gray-600 text-sm mb-3">Untuk pembaca muda</p>
                    <span class="inline-block px-2 py-1 bg-yellow-100 text-yellow-800 text-xs font-semibold rounded-full">178+ Buku</span>
                </div>
            </div>
        </a>

        <!-- Business -->
        <a href="#" class="group">
            <div class="relative overflow-hidden rounded-xl shadow-lg h-full transition-all duration-500 hover:shadow-2xl">
                <div class="h-40 bg-gradient-to-br from-red-500 to-red-700 flex items-center justify-center transition-all duration-500 group-hover:opacity-90">
                    <i class="fas fa-chart-line text-5xl text-white opacity-90 group-hover:opacity-100 transition-opacity duration-300"></i>
                </div>
                <div class="p-5 bg-white">
                    <h3 class="text-lg font-bold text-gray-800 mb-2 group-hover:text-red-600 transition-colors">Bisnis</h3>
                    <p class="text-gray-600 text-sm mb-3">Entrepreneur & keuangan</p>
                    <span class="inline-block px-2 py-1 bg-red-100 text-red-800 text-xs font-semibold rounded-full">156+ Buku</span>
                </div>
            </div>
        </a>

        <!-- Technology -->
        <a href="#" class="group">
            <div class="relative overflow-hidden rounded-xl shadow-lg h-full transition-all duration-500 hover:shadow-2xl">
                <div class="h-40 bg-gradient-to-br from-indigo-500 to-indigo-700 flex items-center justify-center transition-all duration-500 group-hover:opacity-90">
                    <i class="fas fa-laptop-code text-5xl text-white opacity-90 group-hover:opacity-100 transition-opacity duration-300"></i>
                </div>
                <div class="p-5 bg-white">
                    <h3 class="text-lg font-bold text-gray-800 mb-2 group-hover:text-indigo-600 transition-colors">Teknologi</h3>
                    <p class="text-gray-600 text-sm mb-3">Komputer & pemrograman</p>
                    <span class="inline-block px-2 py-1 bg-indigo-100 text-indigo-800 text-xs font-semibold rounded-full">98+ Buku</span>
                </div>
            </div>
        </a>

        <!-- History -->
        <a href="#" class="group">
            <div class="relative overflow-hidden rounded-xl shadow-lg h-full transition-all duration-500 hover:shadow-2xl">
                <div class="h-40 bg-gradient-to-br from-amber-600 to-amber-800 flex items-center justify-center transition-all duration-500 group-hover:opacity-90">
                    <i class="fas fa-landmark text-5xl text-white opacity-90 group-hover:opacity-100 transition-opacity duration-300"></i>
                </div>
                <div class="p-5 bg-white">
                    <h3 class="text-lg font-bold text-gray-800 mb-2 group-hover:text-amber-600 transition-colors">Sejarah</h3>
                    <p class="text-gray-600 text-sm mb-3">Peristiwa & peradaban</p>
                    <span class="inline-block px-2 py-1 bg-amber-100 text-amber-800 text-xs font-semibold rounded-full">87+ Buku</span>
                </div>
            </div>
        </a>

        <!-- Romance -->
        <a href="#" class="group">
            <div class="relative overflow-hidden rounded-xl shadow-lg h-full transition-all duration-500 hover:shadow-2xl">
                <div class="h-40 bg-gradient-to-br from-pink-500 to-pink-700 flex items-center justify-center transition-all duration-500 group-hover:opacity-90">
                    <i class="fas fa-heart text-5xl text-white opacity-90 group-hover:opacity-100 transition-opacity duration-300"></i>
                </div>
                <div class="p-5 bg-white">
                    <h3 class="text-lg font-bold text-gray-800 mb-2 group-hover:text-pink-600 transition-colors">Romansa</h3>
                    <p class="text-gray-600 text-sm mb-3">Cinta & hubungan</p>
                    <span class="inline-block px-2 py-1 bg-pink-100 text-pink-800 text-xs font-semibold rounded-full">203+ Buku</span>
                </div>
            </div>
        </a>

        <!-- Mystery -->
        <a href="#" class="group">
            <div class="relative overflow-hidden rounded-xl shadow-lg h-full transition-all duration-500 hover:shadow-2xl">
                <div class="h-40 bg-gradient-to-br from-gray-600 to-gray-800 flex items-center justify-center transition-all duration-500 group-hover:opacity-90">
                    <i class="fas fa-search text-5xl text-white opacity-90 group-hover:opacity-100 transition-opacity duration-300"></i>
                </div>
                <div class="p-5 bg-white">
                    <h3 class="text-lg font-bold text-gray-800 mb-2 group-hover:text-gray-600 transition-colors">Misteri</h3>
                    <p class="text-gray-600 text-sm mb-3">Kriminal & detektif</p>
                    <span class="inline-block px-2 py-1 bg-gray-100 text-gray-800 text-xs font-semibold rounded-full">167+ Buku</span>
                </div>
            </div>
        </a>

        <!-- Self-Help -->
        <a href="#" class="group">
            <div class="relative overflow-hidden rounded-xl shadow-lg h-full transition-all duration-500 hover:shadow-2xl">
                <div class="h-40 bg-gradient-to-br from-teal-500 to-teal-700 flex items-center justify-center transition-all duration-500 group-hover:opacity-90">
                    <i class="fas fa-hands-helping text-5xl text-white opacity-90 group-hover:opacity-100 transition-opacity duration-300"></i>
                </div>
                <div class="p-5 bg-white">
                    <h3 class="text-lg font-bold text-gray-800 mb-2 group-hover:text-teal-600 transition-colors">Pengembangan Diri</h3>
                    <p class="text-gray-600 text-sm mb-3">Pertumbuhan pribadi</p>
                    <span class="inline-block px-2 py-1 bg-teal-100 text-teal-800 text-xs font-semibold rounded-full">145+ Buku</span>
                </div>
            </div>
        </a>

        <!-- Fantasy -->
        <a href="#" class="group">
            <div class="relative overflow-hidden rounded-xl shadow-lg h-full transition-all duration-500 hover:shadow-2xl">
                <div class="h-40 bg-gradient-to-br from-fuchsia-500 to-fuchsia-700 flex items-center justify-center transition-all duration-500 group-hover:opacity-90">
                    <i class="fas fa-hat-wizard text-5xl text-white opacity-90 group-hover:opacity-100 transition-opacity duration-300"></i>
                </div>
                <div class="p-5 bg-white">
                    <h3 class="text-lg font-bold text-gray-800 mb-2 group-hover:text-fuchsia-600 transition-colors">Fantasi</h3>
                    <p class="text-gray-600 text-sm mb-3">Dunia imajinatif</p>
                    <span class="inline-block px-2 py-1 bg-fuchsia-100 text-fuchsia-800 text-xs font-semibold rounded-full">112+ Buku</span>
                </div>
            </div>
        </a>

        <!-- Horror -->
        <a href="#" class="group">
            <div class="relative overflow-hidden rounded-xl shadow-lg h-full transition-all duration-500 hover:shadow-2xl">
                <div class="h-40 bg-gradient-to-br from-violet-800 to-violet-900 flex items-center justify-center transition-all duration-500 group-hover:opacity-90">
                    <i class="fas fa-ghost text-5xl text-white opacity-90 group-hover:opacity-100 transition-opacity duration-300"></i>
                </div>
                <div class="p-5 bg-white">
                    <h3 class="text-lg font-bold text-gray-800 mb-2 group-hover:text-violet-600 transition-colors">Horor</h3>
                    <p class="text-gray-600 text-sm mb-3">Cerita menegangkan</p>
                    <span class="inline-block px-2 py-1 bg-violet-100 text-violet-800 text-xs font-semibold rounded-full">93+ Buku</span>
                </div>
            </div>
        </a>

        <!-- Biography -->
        <a href="#" class="group">
            <div class="relative overflow-hidden rounded-xl shadow-lg h-full transition-all duration-500 hover:shadow-2xl">
                <div class="h-40 bg-gradient-to-br from-rose-500 to-rose-700 flex items-center justify-center transition-all duration-500 group-hover:opacity-90">
                    <i class="fas fa-user-tie text-5xl text-white opacity-90 group-hover:opacity-100 transition-opacity duration-300"></i>
                </div>
                <div class="p-5 bg-white">
                    <h3 class="text-lg font-bold text-gray-800 mb-2 group-hover:text-rose-600 transition-colors">Biografi</h3>
                    <p class="text-gray-600 text-sm mb-3">Kisah hidup tokoh</p>
                    <span class="inline-block px-2 py-1 bg-rose-100 text-rose-800 text-xs font-semibold rounded-full">76+ Buku</span>
                </div>
            </div>
        </a>

        <!-- Health -->
        <a href="#" class="group">
            <div class="relative overflow-hidden rounded-xl shadow-lg h-full transition-all duration-500 hover:shadow-2xl">
                <div class="h-40 bg-gradient-to-br from-emerald-500 to-emerald-700 flex items-center justify-center transition-all duration-500 group-hover:opacity-90">
                    <i class="fas fa-heartbeat text-5xl text-white opacity-90 group-hover:opacity-100 transition-opacity duration-300"></i>
                </div>
                <div class="p-5 bg-white">
                    <h3 class="text-lg font-bold text-gray-800 mb-2 group-hover:text-emerald-600 transition-colors">Kesehatan</h3>
                    <p class="text-gray-600 text-sm mb-3">Kesehatan & kebugaran</p>
                    <span class="inline-block px-2 py-1 bg-emerald-100 text-emerald-800 text-xs font-semibold rounded-full">88+ Buku</span>
                </div>
            </div>
        </a>

        <!-- Travel -->
        <a href="#" class="group">
            <div class="relative overflow-hidden rounded-xl shadow-lg h-full transition-all duration-500 hover:shadow-2xl">
                <div class="h-40 bg-gradient-to-br from-cyan-500 to-cyan-700 flex items-center justify-center transition-all duration-500 group-hover:opacity-90">
                    <i class="fas fa-map-marked-alt text-5xl text-white opacity-90 group-hover:opacity-100 transition-opacity duration-300"></i>
                </div>
                <div class="p-5 bg-white">
                    <h3 class="text-lg font-bold text-gray-800 mb-2 group-hover:text-cyan-600 transition-colors">Travel</h3>
                    <p class="text-gray-600 text-sm mb-3">Petualangan & wisata</p>
                    <span class="inline-block px-2 py-1 bg-cyan-100 text-cyan-800 text-xs font-semibold rounded-full">67+ Buku</span>
                </div>
            </div>
        </a>

        <!-- Religion -->
        <a href="#" class="group">
            <div class="relative overflow-hidden rounded-xl shadow-lg h-full transition-all duration-500 hover:shadow-2xl">
                <div class="h-40 bg-gradient-to-br from-blue-700 to-blue-900 flex items-center justify-center transition-all duration-500 group-hover:opacity-90">
                    <i class="fas fa-praying-hands text-5xl text-white opacity-90 group-hover:opacity-100 transition-opacity duration-300"></i>
                </div>
                <div class="p-5 bg-white">
                    <h3 class="text-lg font-bold text-gray-800 mb-2 group-hover:text-blue-700 transition-colors">Agama</h3>
                    <p class="text-gray-600 text-sm mb-3">Spiritual & keagamaan</p>
                    <span class="inline-block px-2 py-1 bg-blue-100 text-blue-800 text-xs font-semibold rounded-full">134+ Buku</span>
                </div>
            </div>
        </a>

        <!-- Cooking -->
        <a href="#" class="group">
            <div class="relative overflow-hidden rounded-xl shadow-lg h-full transition-all duration-500 hover:shadow-2xl">
                <div class="h-40 bg-gradient-to-br from-orange-500 to-orange-700 flex items-center justify-center transition-all duration-500 group-hover:opacity-90">
                    <i class="fas fa-utensils text-5xl text-white opacity-90 group-hover:opacity-100 transition-opacity duration-300"></i>
                </div>
                <div class="p-5 bg-white">
                    <h3 class="text-lg font-bold text-gray-800 mb-2 group-hover:text-orange-600 transition-colors">Masakan</h3>
                    <p class="text-gray-600 text-sm mb-3">Resep & kuliner</p>
                    <span class="inline-block px-2 py-1 bg-orange-100 text-orange-800 text-xs font-semibold rounded-full">79+ Buku</span>
                </div>
            </div>
        </a>

        <!-- Education -->
        <a href="#" class="group">
            <div class="relative overflow-hidden rounded-xl shadow-lg h-full transition-all duration-500 hover:shadow-2xl">
                <div class="h-40 bg-gradient-to-br from-lime-500 to-lime-700 flex items-center justify-center transition-all duration-500 group-hover:opacity-90">
                    <i class="fas fa-graduation-cap text-5xl text-white opacity-90 group-hover:opacity-100 transition-opacity duration-300"></i>
                </div>
                <div class="p-5 bg-white">
                    <h3 class="text-lg font-bold text-gray-800 mb-2 group-hover:text-lime-600 transition-colors">Pendidikan</h3>
                    <p class="text-gray-600 text-sm mb-3">Pembelajaran & referensi</p>
                    <span class="inline-block px-2 py-1 bg-lime-100 text-lime-800 text-xs font-semibold rounded-full">102+ Buku</span>
                </div>
            </div>
        </a>
    </div>

    <!-- Bestseller Section -->
    <div class="mt-20">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-3xl font-bold text-gray-800">
                <span class="border-b-4 border-blue-500 pb-2">Buku Terlaris</span>
            </h2>
            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium flex items-center transition-colors">
                Lihat Semua <i class="fas fa-chevron-right ml-2 text-sm"></i>
            </a>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6">
            <!-- Buku 1 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 group transform hover:-translate-y-2">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://ebook.bungatujuh.sch.id/lib/minigalnano/createthumb.php?filename=images/docs/cover_atomic_habits_perubahan_kecil_yang_memberikan_hasil_luar_biasa.jpg&width=200" 
                         alt="Atomic Habits" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute top-4 right-4 bg-red-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">-25%</div>
                </div>
                <div class="p-5">
                    <div class="flex items-center mb-3">
                        <div class="flex text-yellow-400 text-sm">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="text-gray-500 text-xs ml-2">(1,240 ulasan)</span>
                    </div>
                    <h3 class="font-bold text-gray-800 mb-2 line-clamp-2 group-hover:text-blue-600 transition-colors">Atomic Habits: Perubahan Kecil yang Memberikan Hasil Luar Biasa</h3>
                    <p class="text-gray-500 text-sm mb-4">James Clear</p>
                    <div class="flex justify-between items-center">
                        <div>
                            <span class="text-gray-400 text-sm line-through">Rp 150.000</span>
                            <span class="text-blue-600 font-bold ml-2">Rp 112.500</span>
                        </div>
                        <button class="text-blue-600 hover:text-blue-800 transition-colors">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Buku 2 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 group transform hover:-translate-y-2">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://cdn.gramedia.com/uploads/items/9786020649320_the_midnight_library_cov.jpg" 
                         alt="The Midnight Library" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute top-4 right-4 bg-blue-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">BARU</div>
                </div>
                <div class="p-5">
                    <div class="flex items-center mb-3">
                        <div class="flex text-yellow-400 text-sm">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <span class="text-gray-500 text-xs ml-2">(892 ulasan)</span>
                    </div>
                    <h3 class="font-bold text-gray-800 mb-2 line-clamp-2 group-hover:text-blue-600 transition-colors">The Midnight Library: A Novel</h3>
                    <p class="text-gray-500 text-sm mb-4">Matt Haig</p>
                    <div class="flex justify-between items-center">
                        <div>
                            <span class="text-gray-400 text-sm line-through">Rp 125.000</span>
                            <span class="text-blue-600 font-bold ml-2">Rp 99.000</span>
                        </div>
                        <button class="text-blue-600 hover:text-blue-800 transition-colors">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Buku 3 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 group transform hover:-translate-y-2">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1582135294i/36809135.jpg" 
                         alt="Where the Crawdads Sing" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute top-4 right-4 bg-green-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">BESTSELLER</div>
                </div>
                <div class="p-5">
                    <div class="flex items-center mb-3">
                        <div class="flex text-yellow-400 text-sm">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span class="text-gray-500 text-xs ml-2">(3,451 ulasan)</span>
                    </div>
                    <h3 class="font-bold text-gray-800 mb-2 line-clamp-2 group-hover:text-blue-600 transition-colors">Where the Crawdads Sing</h3>
                    <p class="text-gray-500 text-sm mb-4">Delia Owens</p>
                    <div class="flex justify-between items-center">
                        <div>
                            <span class="text-gray-400 text-sm line-through">Rp 175.000</span>
                            <span class="text-blue-600 font-bold ml-2">Rp 139.000</span>
                        </div>
                        <button class="text-blue-600 hover:text-blue-800 transition-colors">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Buku 4 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 group transform hover:-translate-y-2">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://elibrary.bsi.ac.id/assets/images/buku/230460.jpg" 
                         alt="The Psychology of Money" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute top-4 right-4 bg-purple-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">TOP 10</div>
                </div>
                <div class="p-5">
                    <div class="flex items-center mb-3">
                        <div class="flex text-yellow-400 text-sm">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span class="text-gray-500 text-xs ml-2">(2,187 ulasan)</span>
                    </div>
                    <h3 class="font-bold text-gray-800 mb-2 line-clamp-2 group-hover:text-blue-600 transition-colors">The Psychology of Money</h3>
                    <p class="text-gray-500 text-sm mb-4">Morgan Housel</p>
                    <div class="flex justify-between items-center">
                        <div>
                            <span class="text-gray-400 text-sm line-through">Rp 160.000</span>
                            <span class="text-blue-600 font-bold ml-2">Rp 128.000</span>
                        </div>
                        <button class="text-blue-600 hover:text-blue-800 transition-colors">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Buku 5 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 group transform hover:-translate-y-2">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://openlibrary.telkomuniversity.ac.id/uploads/book/cover/24.74.013.jpg" 
                         alt="Educated: A Memoir" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute top-4 right-4 bg-yellow-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">LIMITED</div>
                </div>
                <div class="p-5">
                    <div class="flex items-center mb-3">
                        <div class="flex text-yellow-400 text-sm">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="text-gray-500 text-xs ml-2">(1,763 ulasan)</span>
                    </div>
                    <h3 class="font-bold text-gray-800 mb-2 line-clamp-2 group-hover:text-blue-600 transition-colors">Educated: A Memoir</h3>
                    <p class="text-gray-500 text-sm mb-4">Tara Westover</p>
                    <div class="flex justify-between items-center">
                        <div>
                            <span class="text-gray-400 text-sm line-through">Rp 145.000</span>
                            <span class="text-blue-600 font-bold ml-2">Rp 116.000</span>
                        </div>
                        <button class="text-blue-600 hover:text-blue-800 transition-colors">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@push('styles')
<style>
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>
@endpush

@endsection