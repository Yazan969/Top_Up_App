<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIU Store | Top Up Game Terpercaya</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        // Warna dari ditusi.co.id
                        primary: '#0A2463', // Biru navy tua
                        secondary: '#1E40AF', // Biru medium
                        accent: '#DC2626', // Merah (dari button ditusi)
                        dark: '#0F172A', // Biru sangat tua
                        light: '#F8FAFC', // Abu-abu sangat muda
                        success: '#059669', // Hijau (dari ditusi)
                        orange: '#EA580C', // Orange (aksen tambahan)
                        gray: {
                            50: '#F8FAFC',
                            100: '#F1F5F9',
                            200: '#E2E8F0',
                            300: '#CBD5E1',
                            400: '#94A3B8',
                            500: '#64748B',
                            600: '#475569',
                            700: '#334155',
                            800: '#1E293B',
                            900: '#0F172A'
                        }
                    },
                    fontFamily: {
                        poppins: ['Poppins', 'sans-serif'],
                    },
                    animation: {
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'slide-left-out': 'slideLeftOut 0.8s ease-in-out forwards',
                        'slide-center-to-left': 'slideCenterToLeft 0.8s ease-in-out forwards',
                        'slide-right-to-center': 'slideRightToCenter 0.8s ease-in-out forwards',
                        'slide-right-in': 'slideRightIn 0.8s ease-in-out forwards',
                    },
                    keyframes: {
                        slideLeftOut: {
                            '0%': {
                                transform: 'translateX(0) rotate(-2deg) scale(1)',
                                opacity: '1',
                                zIndex: '1'
                            },
                            '100%': {
                                transform: 'translateX(-100%) rotate(-15deg) scale(0.8)',
                                opacity: '0',
                                zIndex: '0'
                            }
                        },
                        slideCenterToLeft: {
                            '0%': {
                                transform: 'translateX(0) rotate(0deg) scale(1)',
                                zIndex: '10'
                            },
                            '100%': {
                                transform: 'translateX(-100%) rotate(-2deg) scale(0.9)',
                                zIndex: '1'
                            }
                        },
                        slideRightToCenter: {
                            '0%': {
                                transform: 'translateX(0) rotate(2deg) scale(1)',
                                zIndex: '1'
                            },
                            '100%': {
                                transform: 'translateX(-100%) rotate(0deg) scale(1.1)',
                                zIndex: '10'
                            }
                        },
                        slideRightIn: {
                            '0%': {
                                transform: 'translateX(100%) rotate(15deg) scale(0.9)',
                                opacity: '0',
                                zIndex: '0'
                            },
                            '100%': {
                                transform: 'translateX(0) rotate(2deg) scale(1)',
                                opacity: '1',
                                zIndex: '1'
                            }
                        }
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .gaming-bg {
            background: linear-gradient(135deg, rgba(10, 36, 99, 0.85) 0%, rgba(30, 64, 175, 0.75) 100%),
                url('https://images.unsplash.com/photo-1542751371-adc38448a05e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
        }

        .dropdown-menu {
            transform: scale(0.95) translateY(-8px);
            opacity: 0;
            transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .dropdown-menu.scale-100 {
            transform: scale(1) translateY(0);
            opacity: 1;
        }

        .dropdown-menu.scale-95 {
            transform: scale(0.95) translateY(-8px);
            opacity: 0;
        }

        .nav-link {
            position: relative;
        }

        .dropdown-item {
            transition: all 0.2s ease-in-out;
        }

        .dropdown-item:hover i {
            color: white !important;
        }

        /* Hover effect untuk avatar */
        .nav-link:hover img {
            transform: scale(1.05);
            box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.3);
        }

        .nav-link img {
            transition: all 0.3s ease;
        }

        .slide-card {
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
        }

        .slide-card:hover {
            transform: translateY(-8px) scale(1.02);
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .overflow-x-auto::-webkit-scrollbar {
            display: none;
        }

        /* Custom animation classes */
        .animate-slide-left-out {
            animation: slideLeftOut 0.8s ease-in-out forwards;
        }

        .animate-slide-center-to-left {
            animation: slideCenterToLeft 0.8s ease-in-out forwards;
        }

        .animate-slide-right-to-center {
            animation: slideRightToCenter 0.8s ease-in-out forwards;
        }

        .animate-slide-right-in {
            animation: slideRightIn 0.8s ease-in-out forwards;
        }

        /* Gradient background seperti ditusi */
        .ditusi-gradient {
            background: linear-gradient(135deg, #0A2463 0%, #1E40AF 50%, #0A2463 100%);
        }

        .ditusi-hero-gradient {
            background: linear-gradient(135deg, #0A2463 0%, #1E40AF 100%);
        }
        
        /* Improved styles */
        .game-card {
            transition: all 0.3s ease;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }
        
        .game-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .category-filter {
            border-radius: 50px;
            overflow: hidden;
            position: relative;
            display: inline-flex;
            align-items: center;
            margin-bottom: 2rem;
        }
        
        .category-filter-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            margin-right: 1rem;
        }
        
        .line-clamp-1 {
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        .section-title {
            position: relative;
            display: inline-block;
            margin-bottom: 2.5rem;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60%;
            height: 4px;
            background: linear-gradient(90deg, #DC2626, #1E40AF);
            border-radius: 2px;
        }
    </style>
</head>

<body class="font-poppins gaming-bg min-h-screen flex flex-col">

    <!-- Navbar -->
    <nav class="ditusi-gradient shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between h-16">
                <a href="#" class="flex items-center space-x-2 text-white font-bold text-xl">
                    <img src="{{ asset('images/L.jpg') }}" class="w-8 h-8 rounded-lg" alt="Logo">
                    <span>LIU Store</span>
                </a>

                <!-- Search -->
                <div class="hidden md:flex items-center">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-search text-gray-400"></i>
                        </div>
                        <input type="text"
                            class="w-80 pl-10 pr-4 py-2 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                            placeholder="Cari game...">
                    </div>
                </div>

                <div class="flex items-center space-x-6 text-white">
                    <a href="{{ route('dashboard') }}" class="hover:text-gray-200 transition font-medium">Beranda</a>
                    <ul class="flex items-center space-x-4 ms-auto">

                        <!-- User Dropdown -->
                        <li class="nav-item dropdown relative">
                            <a class="nav-link flex items-center space-x-2 text-white hover:text-gray-200 transition-colors duration-200 cursor-pointer"
                                id="userDropdown" aria-haspopup="true" aria-expanded="false">
                                <!-- Avatar dengan posisi di kanan atas -->
                                <div class="relative">
                                    <img src="{{ asset('images/pp.jpg') }}"
                                        class="w-10 h-10 rounded-full object-cover border-2 border-white shadow-lg"
                                        alt="User Avatar">
                                    <!-- Indicator online (opsional) -->
                                    <div
                                        class="absolute -top-1 -right-1 w-3 h-3 bg-success rounded-full border-2 border-white">
                                    </div>
                                </div>
                                <span class="hidden md:inline font-medium">{{ auth()->user()->name }}</span>
                                <i class="fas fa-chevron-down text-xs mt-1 transition-transform duration-200"></i>
                            </a>

                            <!-- Dropdown Menu -->
                            <div class="dropdown-menu absolute right-0 mt-2 w-56 bg-white rounded-xl shadow-2xl border border-gray-100 py-3 z-50 hidden transition-all duration-200 transform origin-top-right"
                                id="dropdownContent">
                                <!-- Header dropdown dengan info user -->
                                <div class="px-4 py-2 border-b border-gray-100 mb-2">
                                    <p class="font-semibold text-gray-800">{{ auth()->user()->name }}</p>
                                    <p class="text-sm text-gray-500">{{ auth()->user()->email }}</p>
                                </div>

                                <a class="dropdown-item flex items-center space-x-3 px-4 py-3 text-gray-700 hover:bg-primary hover:text-white transition-colors duration-150 rounded-lg mx-2"
                                    href=#>
                                    <i class="fas fa-user w-5 text-gray-400"></i>
                                    <span>Profil Saya</span>
                                </a>
                                <a class="dropdown-item flex items-center space-x-3 px-4 py-3 text-gray-700 hover:bg-primary hover:text-white transition-colors duration-150 rounded-lg mx-2"
                                    href="{{ route('Riwayat.Transaksi') }}">
                                    <i class="fas fa-history w-5 text-gray-400"></i>
                                    <span>Riwayat Transaksi</span>
                                </a>
                                <div class="border-t border-gray-200 my-2"></div>
                                <a class="dropdown-item flex items-center space-x-3 px-4 py-3 text-gray-700 hover:bg-accent hover:text-white transition-colors duration-150 rounded-lg mx-2"
                                    href="{{ route('logout') }}">
                                    <i class="fas fa-sign-out-alt w-5 text-gray-400"></i>
                                    <span>Keluar</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero 3-Card Slideshow -->
    <div
        class="relative h-[600px] ditusi-hero-gradient mb-12 rounded-b-2xl overflow-hidden flex items-center justify-center">
        <div class="relative w-full max-w-7xl mx-auto px-8 flex items-center justify-center space-x-10"
            id="slideshow-container">

            <!-- Left Card -->
            <div id="left-slide"
                class="slide-card left-card relative w-80 h-96 rounded-2xl overflow-hidden shadow-2xl transform -rotate-2 glass-effect z-1">
                <img id="left-img" src="{{ asset('images/Lblue.jpg') }}" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                    <h3 id="left-title" class="text-xl font-bold mb-2">Blue Archive</h3>
                    <p id="left-desc" class="text-sm opacity-90 line-clamp-2">Top Up Pyroxene Dan Package Request Dengan Harga
                        Terbaik</p>
                </div>
                <!-- TOMBOL PREVIOUS DIHAPUS -->
                <div class="absolute top-4 right-4 bg-primary/80 text-white px-3 py-1 rounded-full text-xs font-bold">
                    TRENDING</div>
            </div>

            <!-- Center Card -->
            <div id="center-slide"
                class="slide-card center-card relative w-[500px] h-[450px] rounded-3xl overflow-hidden shadow-2xl z-10 glass-effect border-2 border-white/20">
                <img id="center-img" src="{{ asset('images/Lml.jpg') }}" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                    <h3 id="center-title" class="text-3xl font-bold mb-3">Mobile Legends</h3>
                    <p id="center-desc" class="text-lg opacity-90 mb-6 line-clamp-2">Top Up Diamond Dengan Proses Instan Dan Aman</p>
                    <div class="flex space-x-4">
                        <a href=""><button
                                class="bg-accent hover:bg-red-700 text-white px-8 py-3 rounded-full font-bold transition transform shadow-lg">Top
                                Up Sekarang</button></a>
                        <button
                            class="bg-white/20 text-white px-6 py-3 rounded-full font-bold hover:bg-white/30 backdrop-blur-sm transition">Lihat
                            Detail</button>
                    </div>
                </div>
                <div
                    class="absolute top-6 right-6 bg-accent text-white px-4 py-2 rounded-full text-base font-bold animate-pulse shadow-lg">
                    🔥 POPULER</div>
                <div class="absolute top-6 left-6 bg-success text-white px-3 py-1 rounded-full text-sm font-bold"><i
                        class="fas fa-bolt mr-1"></i>INSTANT</div>
            </div>

            <!-- Right Card -->
            <div id="right-slide"
                class="slide-card right-card relative w-80 h-96 rounded-2xl overflow-hidden shadow-2xl transform rotate-2 glass-effect z-1">
                <img id="right-img" src="{{ asset('images/LHonkai-Star-Rail.jpg') }}"
                    class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                    <h3 id="right-title" class="text-xl font-bold mb-2">Honkai: Star Rail</h3>
                    <p id="right-desc" class="text-sm opacity-90 line-clamp-2">Stellar Jade Murah Dengan Proses Cepat</p>
                </div>
                <!-- TOMBOL NEXT DIHAPUS -->
                <div class="absolute top-4 left-4 bg-secondary/80 text-white px-3 py-1 rounded-full text-xs font-bold">
                    NEW</div>
            </div>
        </div>

        <!-- Dots -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex space-x-4 z-20">
            <button class="slide-dot w-4 h-4 rounded-full bg-white/50 hover:bg-white active bg-white"
                data-slide="0"></button>
            <button class="slide-dot w-4 h-4 rounded-full bg-white/50 hover:bg-white" data-slide="1"></button>
            <button class="slide-dot w-4 h-4 rounded-full bg-white/50 hover:bg-white" data-slide="2"></button>
            <button class="slide-dot w-4 h-4 rounded-full bg-white/50 hover:bg-white" data-slide="3"></button>
            <button class="slide-dot w-4 h-4 rounded-full bg-white/50 hover:bg-white" data-slide="4"></button>
        </div>

        <!-- ARROWS DIHAPUS -->

        <!-- Background Decoration -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-32 -left-32 w-[500px] h-[500px] bg-white/5 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-32 -right-32 w-[500px] h-[500px] bg-accent/10 rounded-full blur-3xl"></div>
            <div
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-secondary/20 rounded-full blur-3xl">
            </div>
        </div>

        <!-- Info -->
        <div class="absolute top-8 left-1/2 -translate-x-1/2 text-white text-center z-10">
            <div class="bg-white/10 backdrop-blur-sm px-6 py-3 rounded-full">
                <span class="font-semibold">🎮 99+ Game Tersedia • ⚡ Proses Instan • 🔒 100% Aman</span>
            </div>
        </div>
    </div>

    <!-- Promo Section -->
    <div class="w-full ditusi-gradient py-16 mb-16">
        <div class="container mx-auto px-6 relative text-center">
            <h2 class="text-4xl font-bold text-center text-white mb-4">
                PROMO GAME TERBAIK | TERSEDIA 24 JAM DI SINI
            </h2>
            <p class="text-center text-white/80 text-lg max-w-2xl mx-auto mb-8">
                Dapatkan Harga Spesial Dan Bonus Menarik Untuk Top Up Game Favorit Anda
            </p>
            <div class="flex justify-center">
                <button class="bg-accent hover:bg-red-700 text-white px-8 py-3 rounded-full font-bold transition-all duration-300 transform hover:scale-105 shadow-lg">
                    Lihat Semua Promo
                </button>
            </div>
        </div>
    </div>

    <!-- Game Section -->
    <div class="container mx-auto px-6 mb-16">
        <h2 class="section-title text-3xl font-bold text-white mb-8 text-center">Game Populer</h2>
        
        <!-- Category Filter -->
        <div class="flex justify-center mb-12">
            <div class="category-filter ditusi-gradient">
                <div class="category-filter-icon bg-accent">
                    🔥
                </div>
                <button class="px-8 py-4 text-white font-medium text-lg">Top Up Best Sellers</button>
            </div>
        </div>

        <!-- Contoh game cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @forelse($games as $g)
                <div
                    class="game-card group bg-white rounded-2xl shadow-lg overflow-hidden relative border border-gray-100">
                    @if ($g->is_popular ?? false)
                        <span
                            class="absolute top-3 right-3 bg-accent text-white px-3 py-1 rounded-full text-xs font-bold animate-pulse z-10">
                            Populer
                        </span>
                    @endif

                    <div class="overflow-hidden">
                        <img src="{{ asset('storage/'. $g->logo) }}" class="w-full h-48 object-cover" alt="{{ $g->name }}">
                    </div>

                    <div class="p-6 text-center">
                        <h5 class="card-title font-bold text-lg text-gray-800 mb-2 line-clamp-1">
                            {{ $g->name }}
                        </h5>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-2">
                            Mulai dari Rp {{ number_format($g->topup_rate * 1000, 0, ',', '.') }}
                        </p>
                        <a href="#"
                            class="btn-topup w-full bg-primary text-white py-3 px-6 rounded-lg font-semibold hover:bg-secondary transition-all duration-200 inline-block transform hover:scale-105">
                            Top Up Sekarang
                        </a>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-12">
                    <p class="text-white text-xl">Tidak ada game tersedia saat ini.</p>
                </div>
            @endforelse
        </div>
        
        <!-- Coming Soon Section -->
        <div class="mt-20">
            <h2 class="section-title text-3xl font-bold text-white mb-8 text-center">Game Akan Datang</h2>
            
            <div class="flex justify-center mb-12">
                <div class="category-filter ditusi-gradient">
                    <div class="category-filter-icon bg-blue-600">
                        ➕
                    </div>
                    <button class="px-8 py-4 text-white font-medium text-lg">Top Up Yang Akan Rilis</button>
                </div>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Placeholder untuk game yang akan datang -->
                <div class="game-card group bg-white/10 backdrop-blur-sm rounded-2xl overflow-hidden relative border border-white/20">
                    <div class="p-6 text-center text-white">
                        <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-question text-2xl"></i>
                        </div>
                        <h5 class="font-bold text-lg mb-2">Game Baru</h5>
                        <p class="text-white/70 text-sm mb-4">Segera Hadir</p>
                        <button class="w-full bg-white/20 text-white py-3 px-6 rounded-lg font-semibold transition-all duration-200 opacity-70 cursor-not-allowed">
                            Coming Soon
                        </button>
                    </div>
                </div>
                
                <!-- Tambahkan lebih banyak placeholder sesuai kebutuhan -->
                <div class="game-card group bg-white/10 backdrop-blur-sm rounded-2xl overflow-hidden relative border border-white/20">
                    <div class="p-6 text-center text-white">
                        <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-question text-2xl"></i>
                        </div>
                        <h5 class="font-bold text-lg mb-2">Game Baru</h5>
                        <p class="text-white/70 text-sm mb-4">Segera Hadir</p>
                        <button class="w-full bg-white/20 text-white py-3 px-6 rounded-lg font-semibold transition-all duration-200 opacity-70 cursor-not-allowed">
                            Coming Soon
                        </button>
                    </div>
                </div>
                
                <div class="game-card group bg-white/10 backdrop-blur-sm rounded-2xl overflow-hidden relative border border-white/20">
                    <div class="p-6 text-center text-white">
                        <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-question text-2xl"></i>
                        </div>
                        <h5 class="font-bold text-lg mb-2">Game Baru</h5>
                        <p class="text-white/70 text-sm mb-4">Segera Hadir</p>
                        <button class="w-full bg-white/20 text-white py-3 px-6 rounded-lg font-semibold transition-all duration-200 opacity-70 cursor-not-allowed">
                            Coming Soon
                        </button>
                    </div>
                </div>
                
                <div class="game-card group bg-white/10 backdrop-blur-sm rounded-2xl overflow-hidden relative border border-white/20">
                    <div class="p-6 text-center text-white">
                        <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-question text-2xl"></i>
                        </div>
                        <h5 class="font-bold text-lg mb-2">Game Baru</h5>
                        <p class="text-white/70 text-sm mb-4">Segera Hadir</p>
                        <button class="w-full bg-white/20 text-white py-3 px-6 rounded-lg font-semibold transition-all duration-200 opacity-70 cursor-not-allowed">
                            Coming Soon
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer FULL WIDTH -->
    <footer class="bg-dark text-white mt-auto w-full">
        <div class="w-full py-16">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                    <!-- Logo dan Company Info -->
                    <div class="text-center lg:text-left">
                        <div class="flex items-center justify-center lg:justify-start space-x-3 mb-6">
                            <img src="{{asset('images/L.jpg')}}" class="w-12 h-12 rounded-lg" alt="Logo">
                            <span class="text-2xl font-bold text-white">LIU Store</span>
                        </div>
                        <p class="text-gray-300 text-lg leading-relaxed">
                            Platform top up game terpercaya dengan pelayanan 24 jam. 
                            Dapatkan harga terbaik dan proses instan untuk semua game favorit Anda.
                        </p>
                    </div>

                    <!-- Features Section -->
                    <div class="text-center">
                        <h3 class="text-2xl font-bold mb-6 text-white">Keunggulan Kami</h3>
                        <div class="space-y-4">
                            <div class="flex items-center justify-center space-x-3">
                                <i class="fas fa-bolt text-primary text-xl"></i>
                                <span class="text-gray-200 text-lg">Proses Cepat</span>
                            </div>
                            <div class="flex items-center justify-center space-x-3">
                                <i class="fas fa-shield-alt text-primary text-xl"></i>
                                <span class="text-gray-200 text-lg">Aman & Terpercaya</span>
                            </div>
                            <div class="flex items-center justify-center space-x-3">
                                <i class="fas fa-headset text-primary text-xl"></i>
                                <span class="text-gray-200 text-lg">Bantuan 24/7</span>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="text-center lg:text-right">
                        <h3 class="text-2xl font-bold mb-6 text-white">Ikuti Kami</h3>
                        <div class="flex justify-center lg:justify-end space-x-5 mb-6">
                            <a href="https://www.facebook.com/" class="text-3xl hover:text-accent transition-all duration-300 transform hover:-translate-y-1">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="#" class="text-3xl hover:text-accent transition-all duration-300 transform hover:-translate-y-1">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="text-3xl hover:text-accent transition-all duration-300 transform hover:-translate-y-1">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.youtube.com/" class="text-3xl hover:text-accent transition-all duration-300 transform hover:-translate-y-1">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a href="#" class="text-3xl hover:text-accent transition-all duration-300 transform hover:-translate-y-1">
                                <i class="fab fa-discord"></i>
                            </a>
                        </div>
                        <p class="text-gray-300 text-lg">&copy; 2025 LIU Store - Laravel 10. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Slideshow JS - Update untuk menghapus event listener tombol -->
    <script>
        class ThreeCardSlideshow {
            constructor() {
                this.slides = [{
                        left: {
                            image: '{{ asset('images/Lblue.jpg') }}',
                            title: 'Blue Archive',
                            description: 'Top up Pyroxene Dan Package Request dengan harga terbaik'
                        },
                        center: {
                            image: '{{ asset('images/Lml.jpg') }}',
                            title: 'Mobile Legends',
                            description: 'Top up diamond dengan proses instan dan aman'
                        },
                        right: {
                            image: '{{ asset('images/LHonkai-Star-Rail.jpg') }}',
                            title: 'Honkai: Star Rail',
                            description: 'Stellar Jade Murah Dengan Proses Cepat'
                        }
                    },
                    {
                        left: {
                            image: 'https://images.unsplash.com/photo-1511512578047-dfb367046420?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                            title: 'PUBG Mobile',
                            description: 'UC murah dengan proses cepat'
                        },
                        center: {
                            image: 'https://images.unsplash.com/photo-1542751371-adc38448a05e?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                            title: 'Valorant',
                            description: 'Top up points dengan harga spesial'
                        },
                        right: {
                            image: '{{ asset('images/LGenshin.jpg') }}',
                            title: 'Genshin Impact',
                            description: 'Genesis Crystal Promo'
                        }
                    },
                    {
                        left: {
                            image: 'https://images.unsplash.com/photo-1542751110-97427bbecf20?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                            title: 'Free Fire',
                            description: 'Diamond FF bonus menarik'
                        },
                        center: {
                            image: 'https://images.unsplash.com/photo-1511512578047-dfb367046420?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                            title: 'PUBG Mobile',
                            description: 'UC murah proses instan'
                        },
                        right: {
                            image: '{{ asset('images/Lblue.jpg') }}',
                            title: 'Blue Archive',
                            description: 'Top up Pyroxene Dan Package Request Dengan Harga Terbaik'
                        }
                    },
                    {
                        left: {
                            image: 'https://images.unsplash.com/photo-1534423861386-85a16f5d13fd?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                            title: 'Genshin Impact',
                            description: 'Genesis crystal promo'
                        },
                        center: {
                            image: 'https://images.unsplash.com/photo-1542751110-97427bbecf20?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                            title: 'Free Fire',
                            description: 'Diamond FF bonus menarik'
                        },
                        right: {
                            image: '{{ asset('images/Lml.jpg') }}',
                            title: 'Mobile Legends',
                            description: 'Top Up Diamond Dengan Proses Instan Dan Aman'
                        }
                    }

                ];

                this.currentSlide = 0;
                this.slideInterval = null;
                this.slideDuration = 5000;
                this.isAnimating = false;

                this.init();
            }

            init() {
                document.querySelectorAll('.slide-dot').forEach((dot, idx) => dot.addEventListener('click', () => this
                    .goToSlide(idx)));

                this.startAutoSlide();
                const container = document.getElementById('slideshow-container');
                container.addEventListener('mouseenter', () => this.stopAutoSlide());
                container.addEventListener('mouseleave', () => this.startAutoSlide());
            }

            // ... (method lainnya tetap sama)
            async runAnimation(direction = 'next') {
                if (this.isAnimating) return;
                this.isAnimating = true;

                const left = document.getElementById('left-slide');
                const center = document.getElementById('center-slide');
                const right = document.getElementById('right-slide');

                // Simpan konten asli
                const leftContent = {
                    img: document.getElementById('left-img').src,
                    title: document.getElementById('left-title').textContent,
                    desc: document.getElementById('left-desc').textContent
                };
                const centerContent = {
                    img: document.getElementById('center-img').src,
                    title: document.getElementById('center-title').textContent,
                    desc: document.getElementById('center-desc').textContent
                };
                const rightContent = {
                    img: document.getElementById('right-img').src,
                    title: document.getElementById('right-title').textContent,
                    desc: document.getElementById('right-desc').textContent
                };

                // Animasi perpindahan
                left.classList.add('animate-slide-left-out');
                center.classList.add('animate-slide-center-to-left');
                right.classList.add('animate-slide-right-to-center');

                await new Promise(r => setTimeout(r, 800));

                // Update konten
                document.getElementById('left-img').src = centerContent.img;
                document.getElementById('left-title').textContent = centerContent.title;
                document.getElementById('left-desc').textContent = centerContent.desc;

                document.getElementById('center-img').src = rightContent.img;
                document.getElementById('center-title').textContent = rightContent.title;
                document.getElementById('center-desc').textContent = rightContent.desc;

                // Reset posisi card kiri dan tengah
                left.classList.remove('animate-slide-left-out', 'animate-slide-center-to-left',
                    'animate-slide-right-to-center', 'animate-slide-right-in');
                center.classList.remove('animate-slide-left-out', 'animate-slide-center-to-left',
                    'animate-slide-right-to-center', 'animate-slide-right-in');

                // Atur posisi card kanan untuk animasi masuk
                right.style.transform = 'translateX(100%)';
                right.style.opacity = '0';
                right.classList.remove('animate-slide-left-out', 'animate-slide-center-to-left',
                    'animate-slide-right-to-center', 'animate-slide-right-in');

                // Update konten card kanan dengan slide berikutnya
                const nextSlideIndex = (this.currentSlide + 1) % this.slides.length;
                const nextSlide = this.slides[nextSlideIndex];
                document.getElementById('right-img').src = nextSlide.right.image;
                document.getElementById('right-title').textContent = nextSlide.right.title;
                document.getElementById('right-desc').textContent = nextSlide.right.description;

                // Update currentSlide
                this.currentSlide = nextSlideIndex;

                // Animasi card kanan masuk
                right.classList.add('animate-slide-right-in');

                await new Promise(r => setTimeout(r, 800));

                right.classList.remove('animate-slide-right-in');
                right.style.transform = 'rotate(2deg)';
                right.style.opacity = '1';

                // Update dots
                document.querySelectorAll('.slide-dot').forEach((dot, idx) => {
                    dot.classList.toggle('active', idx === this.currentSlide);
                    dot.classList.toggle('bg-white', idx === this.currentSlide);
                    dot.classList.toggle('bg-white/50', idx !== this.currentSlide);
                });

                this.isAnimating = false;
            }

            async nextSlide() {
                await this.runAnimation('next');
                this.restartAutoSlide();
            }

            async prevSlide() {
                if (this.isAnimating) return;
                this.isAnimating = true;

                const left = document.getElementById('left-slide');
                const center = document.getElementById('center-slide');
                const right = document.getElementById('right-slide');

                // Simpan konten asli
                const leftContent = {
                    img: document.getElementById('left-img').src,
                    title: document.getElementById('left-title').textContent,
                    desc: document.getElementById('left-desc').textContent
                };
                const centerContent = {
                    img: document.getElementById('center-img').src,
                    title: document.getElementById('center-title').textContent,
                    desc: document.getElementById('center-desc').textContent
                };
                const rightContent = {
                    img: document.getElementById('right-img').src,
                    title: document.getElementById('right-title').textContent,
                    desc: document.getElementById('right-desc').textContent
                };

                // Animasi perpindahan untuk prev
                right.classList.add('animate-slide-left-out');
                center.classList.add('animate-slide-right-to-center');
                left.classList.add('animate-slide-center-to-left');

                await new Promise(r => setTimeout(r, 800));

                // Update konten
                document.getElementById('right-img').src = centerContent.img;
                document.getElementById('right-title').textContent = centerContent.title;
                document.getElementById('right-desc').textContent = centerContent.desc;

                document.getElementById('center-img').src = leftContent.img;
                document.getElementById('center-title').textContent = leftContent.title;
                document.getElementById('center-desc').textContent = leftContent.desc;

                // Reset posisi card kanan dan tengah
                right.classList.remove('animate-slide-left-out', 'animate-slide-center-to-left',
                    'animate-slide-right-to-center', 'animate-slide-right-in');
                center.classList.remove('animate-slide-left-out', 'animate-slide-center-to-left',
                    'animate-slide-right-to-center', 'animate-slide-right-in');

                // Atur posisi card kiri untuk animasi masuk
                left.style.transform = 'translateX(-100%)';
                left.style.opacity = '0';
                left.classList.remove('animate-slide-left-out', 'animate-slide-center-to-left',
                    'animate-slide-right-to-center', 'animate-slide-right-in');

                // Update konten card kiri dengan slide sebelumnya
                const prevSlideIndex = (this.currentSlide - 1 + this.slides.length) % this.slides.length;
                const prevSlide = this.slides[prevSlideIndex];
                document.getElementById('left-img').src = prevSlide.left.image;
                document.getElementById('left-title').textContent = prevSlide.left.title;
                document.getElementById('left-desc').textContent = prevSlide.left.description;

                // Update currentSlide
                this.currentSlide = prevSlideIndex;

                // Animasi card kiri masuk
                left.classList.add('animate-slide-right-in');

                await new Promise(r => setTimeout(r, 800));

                left.classList.remove('animate-slide-right-in');
                left.style.transform = 'rotate(-2deg)';
                left.style.opacity = '1';

                // Update dots
                document.querySelectorAll('.slide-dot').forEach((dot, idx) => {
                    dot.classList.toggle('active', idx === this.currentSlide);
                    dot.classList.toggle('bg-white', idx === this.currentSlide);
                    dot.classList.toggle('bg-white/50', idx !== this.currentSlide);
                });

                this.isAnimating = false;
                this.restartAutoSlide();
            }

            async goToSlide(index) {
                if (this.isAnimating || index === this.currentSlide) return;

                const direction = index > this.currentSlide ? 'next' : 'prev';
                let steps;
                if (direction === 'next') {
                    steps = index - this.currentSlide;
                } else {
                    steps = this.currentSlide - index;
                }

                for (let i = 0; i < steps; i++) {
                    if (direction === 'next') {
                        await this.nextSlide();
                    } else {
                        await this.prevSlide();
                    }
                }
            }

            startAutoSlide() {
                this.stopAutoSlide();
                this.slideInterval = setInterval(() => this.nextSlide(), this.slideDuration);
            }

            stopAutoSlide() {
                if (this.slideInterval) {
                    clearInterval(this.slideInterval);
                    this.slideInterval = null;
                }
            }

            restartAutoSlide() {
                this.stopAutoSlide();
                this.startAutoSlide();
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            new ThreeCardSlideshow();

            // category filter
            document.querySelectorAll('.category-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    document.querySelectorAll('.category-btn').forEach(b => {
                        b.classList.remove('active', 'bg-primary', 'text-white',
                            'border-primary');
                        b.classList.add('bg-white', 'text-primary', 'border-primary');
                    });
                    this.classList.remove('bg-white', 'text-primary', 'border-primary');
                    this.classList.add('active', 'bg-primary', 'text-white', 'border-primary');
                    console.log('Filter:', this.textContent);
                });
            });
        });
    </script>

    <!-- JavaScript untuk toggle dropdown -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dropdownToggle = document.getElementById('userDropdown');
            const dropdownContent = document.getElementById('dropdownContent');

            dropdownToggle.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();

                // Toggle dropdown visibility dengan animasi
                const isHidden = dropdownContent.classList.contains('hidden');

                if (isHidden) {
                    dropdownContent.classList.remove('hidden');
                    setTimeout(() => {
                        dropdownContent.classList.add('scale-100', 'opacity-100', 'translate-y-0');
                        dropdownContent.classList.remove('scale-95', 'opacity-0', '-translate-y-2');
                    }, 10);
                } else {
                    dropdownContent.classList.add('scale-95', 'opacity-0', '-translate-y-2');
                    dropdownContent.classList.remove('scale-100', 'opacity-100', 'translate-y-0');
                    setTimeout(() => {
                        dropdownContent.classList.add('hidden');
                    }, 200);
                }
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', function(e) {
                if (!dropdownToggle.contains(e.target) && !dropdownContent.contains(e.target)) {
                    dropdownContent.classList.add('scale-95', 'opacity-0', '-translate-y-2');
                    dropdownContent.classList.remove('scale-100', 'opacity-100', 'translate-y-0');
                    setTimeout(() => {
                        dropdownContent.classList.add('hidden');
                    }, 200);
                }
            });

            // Close dropdown on escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    dropdownContent.classList.add('scale-95', 'opacity-0', '-translate-y-2');
                    dropdownContent.classList.remove('scale-100', 'opacity-100', 'translate-y-0');
                    setTimeout(() => {
                        dropdownContent.classList.add('hidden');
                    }, 200);
                }
            });
        });
    </script>

</body>

</html>