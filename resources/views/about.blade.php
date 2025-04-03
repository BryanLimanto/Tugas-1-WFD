@extends('layouts.app')

@section('title', 'Tentang Kami - GUDANG LITERASI')

@section('content')
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-r from-blue-600 to-blue-800 text-white py-24 mb-12 rounded-xl overflow-hidden">
        <!-- Background pattern -->
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1507842217343-583bb7270b66?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80')] bg-cover bg-center mix-blend-overlay opacity-20"></div>
        
        <!-- Floating book elements -->
        <div class="absolute -bottom-20 -left-20 w-64 h-64 bg-blue-400 rounded-full filter blur-3xl opacity-20 animate-float-slow"></div>
        <div class="absolute -top-20 -right-20 w-64 h-64 bg-blue-500 rounded-full filter blur-3xl opacity-20 animate-float-medium"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-5xl font-extrabold tracking-tight sm:text-6xl lg:text-7xl mb-6 animate-fade-in-up">
                <span class="block">Tentang</span>
                <span class="block text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 to-yellow-100">GUDANG LITERASI</span>
            </h1>
            <p class="max-w-2xl mx-auto text-xl text-blue-100/90 animate-fade-in-up delay-100">
                📚 Surga Diskon Buku, Bikin Bacaan Makin Asik! 🚀✨
            </p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-16">
        <div class="bg-white rounded-xl shadow-xl overflow-hidden transform transition-all duration-300 hover:shadow-2xl">
            <div class="md:flex">
                <!-- Gambar Toko Buku -->
                <div class="md:w-1/2 relative overflow-hidden">
                    <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1507842217343-583bb7270b66?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Toko Buku">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-6">
                        <span class="bg-yellow-400 text-blue-900 px-3 py-1 rounded-full text-sm font-bold">Sejak 2023</span>
                    </div>
                </div>
                
                <!-- Konten Tentang Kami -->
                <div class="p-8 md:w-1/2">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 19.477 5.754 19 7.5 19s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 19.477 18.247 19 16.5 19c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                        Kenalan Yuk dengan GUDANG LITERASI!
                    </h2>
                    
                    <div class="prose prose-lg text-gray-600 mb-6">
                        <p>Kami adalah <strong>platform digital</strong> yang didedikasikan untuk mendukung industri literasi dengan mempromosikan berbagai event buku, mulai dari peluncuran buku, diskusi literasi, bazar buku, hingga festival sastra.</p>
                        
                        <p>Kami hadir untuk <span class="text-blue-600 font-medium">menghubungkan penerbit, penulis, komunitas, dan pecinta buku</span> dalam satu ruang yang interaktif dan informatif.</p>
                    </div>
                    
                    <!-- Misi Kami -->
                    <div class="mb-8">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Misi Kami
                        </h3>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center text-blue-600">
                                        📖
                                    </div>
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-700 font-medium">Mendukung Literasi</p>
                                    <p class="text-gray-600 text-sm">Menyediakan informasi terkini tentang berbagai event literasi untuk meningkatkan minat baca masyarakat</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center text-blue-600">
                                        🤝
                                    </div>
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-700 font-medium">Menghubungkan Komunitas</p>
                                    <p class="text-gray-600 text-sm">Menjadi jembatan antara penyelenggara event dengan para pencinta buku</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center text-blue-600">
                                        🚀
                                    </div>
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-700 font-medium">Mempermudah Akses</p>
                                    <p class="text-gray-600 text-sm">Platform sederhana dan responsif untuk mencari dan berbagi informasi event buku</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- CTA Bergabung -->
                    <div class="bg-blue-50 rounded-lg p-6 border border-blue-100">
                        <h3 class="text-lg font-semibold text-blue-800 mb-3">Bergabunglah dengan Komunitas Kami!</h3>
                        <p class="text-gray-700 mb-4">Temukan event literasi favoritmu dan dapatkan promo spesial setiap minggunya.</p>
                        <a href="{{ route('promotions.index') }}" class="inline-block px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-medium transition duration-300">
                            Lihat Promo Sekarang 📚✨
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Keunggulan Kami -->
        <div class="mt-16">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12 relative">
                Kenapa Pilih GUDANG LITERASI?
                <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-24 h-1 bg-blue-600 rounded-full"></span>
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Keunggulan 1 -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
                    <div class="w-16 h-16 mb-4 bg-red-100 rounded-full flex items-center justify-center text-red-600 text-2xl">
                        🔥
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Promo Terbaik</h3>
                    <p class="text-gray-600">Cuma promo buku yang benar-benar worth it yang kami tampilkan. Gak ada tipu-tipu!</p>
                </div>
                
                <!-- Keunggulan 2 -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
                    <div class="w-16 h-16 mb-4 bg-green-100 rounded-full flex items-center justify-center text-green-600 text-2xl">
                        💸
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Diskon Gila-gilaan</h3>
                    <p class="text-gray-600">Hemat sampai 70% untuk buku-buku pilihan. Kantong happy, koleksi buku makin banyak!</p>
                </div>
                
                <!-- Keunggulan 3 -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
                    <div class="w-16 h-16 mb-4 bg-purple-100 rounded-full flex items-center justify-center text-purple-600 text-2xl">
                        ⚡
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Langsung ke Sumber</h3>
                    <p class="text-gray-600">Gak pake ribet! Langsung terhubung dengan penerbit dan toko buku terpercaya.</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
<style>
    /* Animasi */
    @keyframes float-slow {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-20px); }
    }
    
    @keyframes float-medium {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-15px); }
    }
    
    @keyframes fade-in-up {
        0% { opacity: 0; transform: translateY(20px); }
        100% { opacity: 1; transform: translateY(0); }
    }
    
    .animate-float-slow {
        animation: float-slow 6s ease-in-out infinite;
    }
    
    .animate-float-medium {
        animation: float-medium 4s ease-in-out infinite;
    }
    
    .animate-fade-in-up {
        animation: fade-in-up 0.8s ease-out forwards;
    }
    
    .animate-fade-in-up.delay-100 {
        animation-delay: 0.1s;
    }
    
    /* Efek hover card */
    .hover-scale {
        transition: transform 0.3s ease;
    }
    
    .hover-scale:hover {
        transform: scale(1.03);
    }
</style>
@endpush