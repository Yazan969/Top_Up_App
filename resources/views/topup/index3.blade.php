<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Transaksi | LIU Store</title>

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

        .dashboard-card {
            transition: all 0.3s ease;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }
        
        .dashboard-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .stat-card {
            transition: all 0.3s ease;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .ditusi-gradient {
            background: linear-gradient(135deg, #0A2463 0%, #1E40AF 50%, #0A2463 100%);
        }

        .ditusi-hero-gradient {
            background: linear-gradient(135deg, #0A2463 0%, #1E40AF 100%);
        }
        
        .section-title {
            position: relative;
            display: inline-block;
            margin-bottom: 1.5rem;
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

        .status-badge {
            padding: 0.25rem 0.75rem;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .status-success {
            background-color: rgba(5, 150, 105, 0.1);
            color: #059669;
        }

        .status-pending {
            background-color: rgba(234, 88, 12, 0.1);
            color: #EA580C;
        }

        .status-failed {
            background-color: rgba(220, 38, 38, 0.1);
            color: #DC2626;
        }

        .activity-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            background: rgba(10, 36, 99, 0.1);
            color: #0A2463;
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
                                    href="#">
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

    <!-- Dashboard Container -->
    <div class="container mx-auto px-6 py-8 flex-1">
        <!-- Dashboard Header -->
        <div class="ditusi-hero-gradient rounded-2xl shadow-xl p-8 mb-8 text-white">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="mb-6 md:mb-0">
                    <h1 class="text-3xl md:text-4xl font-bold mb-2">Selamat Datang, {{ auth()->user()->name }}!</h1>
                    <p class="text-lg opacity-90">Kelola akun dan transaksi top up game Anda di sini</p>
                </div>
                <div class="flex items-center space-x-4">
                    <img src="{{ asset('images/pp.jpg') }}" class="w-20 h-20 rounded-full object-cover border-4 border-white/50 shadow-lg" alt="User Avatar">
                </div>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="stat-card bg-white p-6 text-center">
                <div class="text-3xl text-primary mb-3">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="text-2xl font-bold text-gray-800 mb-1">15</div>
                <div class="text-gray-600 font-medium">Total Transaksi</div>
            </div>
            
            <div class="stat-card bg-white p-6 text-center">
                <div class="text-3xl text-success mb-3">
                    <i class="fas fa-check-circle"></i>
                </div>
                <div class="text-2xl font-bold text-gray-800 mb-1">12</div>
                <div class="text-gray-600 font-medium">Transaksi Berhasil</div>
            </div>
            
            <div class="stat-card bg-white p-6 text-center">
                <div class="text-3xl text-orange mb-3">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="text-2xl font-bold text-gray-800 mb-1">2</div>
                <div class="text-gray-600 font-medium">Transaksi Pending</div>
            </div>
            
            <div class="stat-card bg-white p-6 text-center">
                <div class="text-3xl text-secondary mb-3">
                    <i class="fas fa-wallet"></i>
                </div>
                <div class="text-2xl font-bold text-gray-800 mb-1">Rp 450.000</div>
                <div class="text-gray-600 font-medium">Total Pengeluaran</div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Main Content - Transaction History -->
            <div class="lg:col-span-2">
                <div class="dashboard-card bg-white p-6">
                    <h3 class="section-title text-2xl font-bold text-gray-800">Riwayat Transaksi Terbaru</h3>
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="border-b-2 border-gray-200">
                                    <th class="py-3 px-4 text-left font-semibold text-gray-700">ID Transaksi</th>
                                    <th class="py-3 px-4 text-left font-semibold text-gray-700">Game</th>
                                    <th class="py-3 px-4 text-left font-semibold text-gray-700">Tanggal</th>
                                    <th class="py-3 px-4 text-left font-semibold text-gray-700">Jumlah</th>
                                    <th class="py-3 px-4 text-left font-semibold text-gray-700">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b border-gray-100 hover:bg-gray-50 transition-colors">
                                    <td class="py-4 px-4">#TX001234</td>
                                    <td class="py-4 px-4">
                                        <div class="flex items-center">
                                            <img src="{{ asset('images/Lml.jpg') }}" class="w-8 h-8 rounded mr-2" alt="Mobile Legends">
                                            <span>Mobile Legends</span>
                                        </div>
                                    </td>
                                    <td class="py-4 px-4">15 Nov 2023</td>
                                    <td class="py-4 px-4 font-semibold">Rp 50.000</td>
                                    <td class="py-4 px-4">
                                        <span class="status-badge status-success">Berhasil</span>
                                    </td>
                                </tr>
                                <tr class="border-b border-gray-100 hover:bg-gray-50 transition-colors">
                                    <td class="py-4 px-4">#TX001233</td>
                                    <td class="py-4 px-4">
                                        <div class="flex items-center">
                                            <img src="https://i.ibb.co/6RJjL2H/ff.jpg" class="w-8 h-8 rounded mr-2" alt="Free Fire">
                                            <span>Free Fire</span>
                                        </div>
                                    </td>
                                    <td class="py-4 px-4">14 Nov 2023</td>
                                    <td class="py-4 px-4 font-semibold">Rp 25.000</td>
                                    <td class="py-4 px-4">
                                        <span class="status-badge status-success">Berhasil</span>
                                    </td>
                                </tr>
                                <tr class="border-b border-gray-100 hover:bg-gray-50 transition-colors">
                                    <td class="py-4 px-4">#TX001232</td>
                                    <td class="py-4 px-4">
                                        <div class="flex items-center">
                                            <img src="https://i.ibb.co/6W0b6z0/pubg.jpg" class="w-8 h-8 rounded mr-2" alt="PUBG Mobile">
                                            <span>PUBG Mobile</span>
                                        </div>
                                    </td>
                                    <td class="py-4 px-4">12 Nov 2023</td>
                                    <td class="py-4 px-4 font-semibold">Rp 75.000</td>
                                    <td class="py-4 px-4">
                                        <span class="status-badge status-pending">Pending</span>
                                    </td>
                                </tr>
                                <tr class="border-b border-gray-100 hover:bg-gray-50 transition-colors">
                                    <td class="py-4 px-4">#TX001231</td>
                                    <td class="py-4 px-4">
                                        <div class="flex items-center">
                                            <img src="https://images.unsplash.com/photo-1542751371-adc38448a05e?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="w-8 h-8 rounded mr-2" alt="Valorant">
                                            <span>Valorant</span>
                                        </div>
                                    </td>
                                    <td class="py-4 px-4">10 Nov 2023</td>
                                    <td class="py-4 px-4 font-semibold">Rp 100.000</td>
                                    <td class="py-4 px-4">
                                        <span class="status-badge status-success">Berhasil</span>
                                    </td>
                                </tr>
                                <tr class="border-b border-gray-100 hover:bg-gray-50 transition-colors">
                                    <td class="py-4 px-4">#TX001230</td>
                                    <td class="py-4 px-4">
                                        <div class="flex items-center">
                                            <img src="{{ asset('images/LGenshin.jpg') }}" class="w-8 h-8 rounded mr-2" alt="Genshin Impact">
                                            <span>Genshin Impact</span>
                                        </div>
                                    </td>
                                    <td class="py-4 px-4">8 Nov 2023</td>
                                    <td class="py-4 px-4 font-semibold">Rp 150.000</td>
                                    <td class="py-4 px-4">
                                        <span class="status-badge status-failed">Gagal</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center mt-6">
                        <a href="#" class="bg-primary hover:bg-secondary text-white px-6 py-3 rounded-full font-semibold transition-all duration-200 inline-block transform hover:scale-105">
                            Lihat Semua Transaksi
                        </a>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="space-y-8">
                <!-- Recent Activity -->
                <div class="dashboard-card bg-white p-6">
                    <h3 class="section-title text-2xl font-bold text-gray-800">Aktivitas Terbaru</h3>
                    <div class="space-y-4 mt-4">
                        <div class="flex items-start">
                            <div class="activity-icon">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-800">Top Up Mobile Legends</div>
                                <div class="text-sm text-gray-500">15 Nov 2023, 14:30</div>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="activity-icon">
                                <i class="fas fa-user-edit"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-800">Perbarui Profil</div>
                                <div class="text-sm text-gray-500">14 Nov 2023, 10:15</div>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="activity-icon">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-800">Top Up Free Fire</div>
                                <div class="text-sm text-gray-500">14 Nov 2023, 09:45</div>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="activity-icon">
                                <i class="fas fa-key"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-800">Ganti Password</div>
                                <div class="text-sm text-gray-500">12 Nov 2023, 16:20</div>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="activity-icon">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-800">Top Up PUBG Mobile</div>
                                <div class="text-sm text-gray-500">12 Nov 2023, 11:30</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Favorite Games -->
                <div class="dashboard-card bg-white p-6">
                    <h3 class="section-title text-2xl font-bold text-gray-800">Game Favorit</h3>
                    <div class="space-y-4 mt-4">
                        <div class="flex items-center">
                            <img src="{{ asset('images/Lml.jpg') }}" class="w-12 h-12 rounded-lg mr-3" alt="Mobile Legends">
                            <div>
                                <div class="font-semibold text-gray-800">Mobile Legends</div>
                                <div class="text-sm text-gray-500">5x transaksi</div>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <img src="https://i.ibb.co/6RJjL2H/ff.jpg" class="w-12 h-12 rounded-lg mr-3" alt="Free Fire">
                            <div>
                                <div class="font-semibold text-gray-800">Free Fire</div>
                                <div class="text-sm text-gray-500">3x transaksi</div>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <img src="https://i.ibb.co/6W0b6z0/pubg.jpg" class="w-12 h-12 rounded-lg mr-3" alt="PUBG Mobile">
                            <div>
                                <div class="font-semibold text-gray-800">PUBG Mobile</div>
                                <div class="text-sm text-gray-500">2x transaksi</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white mt-16 w-full">
        <div class="w-full py-12">
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