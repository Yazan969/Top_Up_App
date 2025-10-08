<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya | LIU Store</title>

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

        .profile-avatar {
            transition: all 0.3s ease;
        }

        .profile-avatar:hover {
            transform: scale(1.05);
        }

        .tab-button {
            transition: all 0.3s ease;
            border-radius: 12px;
        }

        .tab-button.active {
            background: linear-gradient(135deg, #0A2463, #1E40AF);
            color: white;
        }

        .form-input {
            transition: all 0.3s ease;
            border-radius: 12px;
        }

        .form-input:focus {
            box-shadow: 0 0 0 3px rgba(10, 36, 99, 0.1);
            border-color: #0A2463;
        }

        .file-upload {
            position: relative;
            overflow: hidden;
            display: inline-block;
        }

        .file-upload input[type="file"] {
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
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

    <!-- Profile Container -->
    <div class="container mx-auto px-6 py-8 flex-1">
        <!-- Profile Header -->
        <div class="ditusi-hero-gradient rounded-2xl shadow-xl p-8 mb-8 text-white">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="flex items-center space-x-6 mb-6 md:mb-0">
                    <div class="relative">
                        <img src="{{ asset('images/pp.jpg') }}"
                            class="w-24 h-24 rounded-full object-cover border-4 border-white/50 shadow-lg profile-avatar"
                            alt="User Avatar" id="profileAvatar">
                        <div class="absolute bottom-0 right-0 bg-primary rounded-full p-2 shadow-lg">
                            <label for="avatarUpload" class="cursor-pointer">
                                <i class="fas fa-camera text-white text-sm"></i>
                            </label>
                            <input type="file" id="avatarUpload" class="hidden" accept="image/*">
                        </div>
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold mb-2">{{ auth()->user()->name }}</h1>
                        <p class="text-lg opacity-90">{{ auth()->user()->email }}</p>
                        <div class="flex items-center space-x-2 mt-2">
                            <span class="bg-success/20 text-success text-xs px-2 py-1 rounded-full">
                                <i class="fas fa-shield-alt mr-1"></i>Verified
                            </span>
                            <span class="bg-white/20 text-white text-xs px-2 py-1 rounded-full">
                                Member sejak {{ auth()->user()->created_at->format('M Y') }}
                            </span>
                        </div>
                    </div>
                </div>
                <div class="flex space-x-4">
                    <button
                        class="bg-white/20 hover:bg-white/30 text-white px-6 py-3 rounded-full font-semibold transition-all duration-200 backdrop-blur-sm">
                        <i class="fas fa-share-alt mr-2"></i>Bagikan Profil
                    </button>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            <!-- Sidebar Menu -->
            <div class="lg:col-span-1">
                <div class="dashboard-card bg-white p-6">
                    <div class="space-y-2">
                        <button class="tab-button w-full text-left px-4 py-3 active" data-tab="profile">
                            <i class="fas fa-user-circle mr-3"></i>Informasi Profil
                        </button>
                        <button class="tab-button w-full text-left px-4 py-3" data-tab="security">
                            <i class="fas fa-shield-alt mr-3"></i>Keamanan
                        </button>
                        <button class="tab-button w-full text-left px-4 py-3" data-tab="preferences">
                            <i class="fas fa-cog mr-3"></i>Preferensi
                        </button>
                        <button class="tab-button w-full text-left px-4 py-3" data-tab="notifications">
                            <i class="fas fa-bell mr-3"></i>Notifikasi
                        </button>
                        <button class="tab-button w-full text-left px-4 py-3" data-tab="linked-accounts">
                            <i class="fas fa-link mr-3"></i>Akun Terhubung
                        </button>
                    </div>

                    <!-- Quick Stats -->
                    <div class="mt-8 pt-6 border-t border-gray-200">
                        <h3 class="font-semibold text-gray-800 mb-4">Statistik Akun</h3>
                        <div class="space-y-3">
                            <div class="flex justify-between items-center">
                                <span class="text-gray-600">Total Transaksi</span>
                                <span class="font-semibold text-primary">15</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-600">Member sejak</span>
                                <span class="font-semibold text-primary">6 bulan</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-600">Level Akun</span>
                                <span class="font-semibold text-accent">Silver</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="lg:col-span-3">
                <!-- Profile Information Tab -->
                <div id="profile-tab" class="tab-content">
                    <div class="dashboard-card bg-white p-6">
                        <h3 class="section-title text-2xl font-bold text-gray-800">Informasi Profil</h3>

                        <form action="{{ route('profile.update') }}" method="POST" class="mt-6 space-y-6">
                            @csrf
                            @method('PUT')

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                                    <input type="text" name="name"
                                        class="w-full form-input border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary @error('name') border-red-500 @enderror"
                                        value="{{ old('name', $user->name) }}" placeholder="Masukkan nama lengkap">
                                    @error('name')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Username</label>
                                    <input type="text" name="username"
                                        class="w-full form-input border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary @error('username') border-red-500 @enderror"
                                        value="{{ old('username', $user->username) }}"
                                        placeholder="Masukkan username">
                                    @error('username')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                                <input type="email" name="email"
                                    class="w-full form-input border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary @error('email') border-red-500 @enderror"
                                    value="{{ old('email', $user->email) }}" placeholder="Masukkan email">
                                @error('email')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Nomor Telepon</label>
                                    <input type="tel" name="phone"
                                        class="w-full form-input border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary @error('phone') border-red-500 @enderror"
                                        value="{{ old('phone', $user->phone) }}"
                                        placeholder="Masukkan nomor telepon">
                                    @error('phone')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Tanggal Lahir</label>
                                    <input type="date" name="birth_date"
                                        class="w-full form-input border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary @error('birth_date') border-red-500 @enderror"
                                        value="{{ old('birth_date', $user->birth_date ? $user->birth_date->format('Y-m-d') : '') }}">
                                    @error('birth_date')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Alamat</label>
                                <textarea name="address"
                                    class="w-full form-input border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary @error('address') border-red-500 @enderror"
                                    rows="3" placeholder="Masukkan alamat lengkap">{{ old('address', $user->address) }}</textarea>
                                @error('address')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex justify-end space-x-4 pt-4">
                                <button type="button"
                                    class="px-6 py-3 border border-gray-300 text-gray-700 rounded-full font-semibold hover:bg-gray-50 transition-all duration-200">
                                    Batal
                                </button>
                                <button type="submit"
                                    class="bg-primary hover:bg-secondary text-white px-6 py-3 rounded-full font-semibold transition-all duration-200 transform hover:scale-105">
                                    Simpan Perubahan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Security Tab -->
            <div id="security-tab" class="tab-content hidden">
                <div class="dashboard-card bg-white p-6">
                    <h3 class="section-title text-2xl font-bold text-gray-800">Keamanan Akun</h3>

                    <div class="mt-6 space-y-6">
                        <!-- Password Change -->
                        <div class="border-b border-gray-200 pb-6">
                            <h4 class="text-lg font-semibold text-gray-800 mb-4">Ubah Password</h4>
                            <form class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Password Saat
                                        Ini</label>
                                    <input type="password"
                                        class="w-full form-input border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary"
                                        placeholder="Masukkan password saat ini">
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Password
                                            Baru</label>
                                        <input type="password"
                                            class="w-full form-input border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary"
                                            placeholder="Masukkan password baru">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Konfirmasi
                                            Password</label>
                                        <input type="password"
                                            class="w-full form-input border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary"
                                            placeholder="Konfirmasi password baru">
                                    </div>
                                </div>
                                <div class="flex justify-end">
                                    <button type="submit"
                                        class="bg-primary hover:bg-secondary text-white px-6 py-3 rounded-full font-semibold transition-all duration-200 transform hover:scale-105">
                                        Ubah Password
                                    </button>
                                </div>
                            </form>
                        </div>

                        <!-- Two-Factor Authentication -->
                        <div class="border-b border-gray-200 pb-6">
                            <h4 class="text-lg font-semibold text-gray-800 mb-4">Autentikasi Dua Faktor</h4>
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-gray-600">Tingkatkan keamanan akun dengan autentikasi dua faktor
                                    </p>
                                    <p class="text-sm text-gray-500 mt-1">Status: <span class="text-orange">Tidak
                                            aktif</span></p>
                                </div>
                                <button
                                    class="bg-primary hover:bg-secondary text-white px-6 py-2 rounded-full font-semibold transition-all duration-200">
                                    Aktifkan
                                </button>
                            </div>
                        </div>

                        <!-- Session Management -->
                        <div>
                            <h4 class="text-lg font-semibold text-gray-800 mb-4">Sesi Aktif</h4>
                            <div class="space-y-4">
                                <div class="flex items-center justify-between p-4 border border-gray-200 rounded-lg">
                                    <div>
                                        <p class="font-semibold">Chrome di Windows</p>
                                        <p class="text-sm text-gray-500">Jakarta, Indonesia • Sekarang</p>
                                    </div>
                                    <span class="text-success text-sm font-semibold">Aktif</span>
                                </div>
                                <div class="flex items-center justify-between p-4 border border-gray-200 rounded-lg">
                                    <div>
                                        <p class="font-semibold">Safari di iPhone</p>
                                        <p class="text-sm text-gray-500">Bandung, Indonesia • 2 jam lalu</p>
                                    </div>
                                    <button class="text-accent hover:text-red-700 text-sm font-semibold">
                                        Keluar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Preferences Tab -->
            <div id="preferences-tab" class="tab-content hidden">
                <div class="dashboard-card bg-white p-6">
                    <h3 class="section-title text-2xl font-bold text-gray-800">Preferensi</h3>

                    <div class="mt-6 space-y-6">
                        <!-- Language & Region -->
                        <div class="border-b border-gray-200 pb-6">
                            <h4 class="text-lg font-semibold text-gray-800 mb-4">Bahasa & Wilayah</h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Bahasa</label>
                                    <select
                                        class="w-full form-input border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary">
                                        <option selected>Bahasa Indonesia</option>
                                        <option>English</option>
                                        <option>日本語</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Zona Waktu</label>
                                    <select
                                        class="w-full form-input border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary">
                                        <option selected>WIB (UTC+7)</option>
                                        <option>WITA (UTC+8)</option>
                                        <option>WIT (UTC+9)</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Currency -->
                        <div class="border-b border-gray-200 pb-6">
                            <h4 class="text-lg font-semibold text-gray-800 mb-4">Mata Uang</h4>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Mata Uang
                                    Default</label>
                                <select
                                    class="w-full form-input border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary">
                                    <option selected>IDR - Rupiah Indonesia</option>
                                    <option>USD - US Dollar</option>
                                    <option>EUR - Euro</option>
                                </select>
                            </div>
                        </div>

                        <!-- Privacy Settings -->
                        <div>
                            <h4 class="text-lg font-semibold text-gray-800 mb-4">Pengaturan Privasi</h4>
                            <div class="space-y-4">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="font-medium text-gray-800">Profil publik</p>
                                        <p class="text-sm text-gray-500">Izinkan pengguna lain melihat profil Anda
                                        </p>
                                    </div>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" class="sr-only peer" checked>
                                        <div
                                            class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary/20 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary">
                                        </div>
                                    </label>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="font-medium text-gray-800">Email marketing</p>
                                        <p class="text-sm text-gray-500">Terima email tentang promo dan penawaran
                                            khusus</p>
                                    </div>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" class="sr-only peer" checked>
                                        <div
                                            class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary/20 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary">
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end space-x-4 pt-6">
                        <button type="button"
                            class="px-6 py-3 border border-gray-300 text-gray-700 rounded-full font-semibold hover:bg-gray-50 transition-all duration-200">
                            Reset
                        </button>
                        <button type="button"
                            class="bg-primary hover:bg-secondary text-white px-6 py-3 rounded-full font-semibold transition-all duration-200 transform hover:scale-105">
                            Simpan Preferensi
                        </button>
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
                            <img src="{{ asset('images/L.jpg') }}" class="w-12 h-12 rounded-lg" alt="Logo">
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
                            <a href="https://www.facebook.com/"
                                class="text-3xl hover:text-accent transition-all duration-300 transform hover:-translate-y-1">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="#"
                                class="text-3xl hover:text-accent transition-all duration-300 transform hover:-translate-y-1">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#"
                                class="text-3xl hover:text-accent transition-all duration-300 transform hover:-translate-y-1">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.youtube.com/"
                                class="text-3xl hover:text-accent transition-all duration-300 transform hover:-translate-y-1">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a href="#"
                                class="text-3xl hover:text-accent transition-all duration-300 transform hover:-translate-y-1">
                                <i class="fab fa-discord"></i>
                            </a>
                        </div>
                        <p class="text-gray-300 text-lg">&copy; 2025 LIU Store - Laravel 10. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Dropdown functionality
            const dropdownToggle = document.getElementById('userDropdown');
            const dropdownContent = document.getElementById('dropdownContent');

            dropdownToggle.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();

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

            // Tab functionality
            const tabButtons = document.querySelectorAll('.tab-button');
            const tabContents = document.querySelectorAll('.tab-content');

            tabButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const tabId = this.getAttribute('data-tab');

                    // Update active tab button
                    tabButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');

                    // Show corresponding tab content
                    tabContents.forEach(content => content.classList.add('hidden'));
                    document.getElementById(`${tabId}-tab`).classList.remove('hidden');
                });
            });

            // Form submission handling dengan AJAX
            const forms = document.querySelectorAll('form');
            forms.forEach(form => {
                form.addEventListener('submit', async function(e) {
                    e.preventDefault();

                    const submitButton = this.querySelector('button[type="submit"]');
                    const originalText = submitButton.textContent;
                    const formData = new FormData(this);

                    submitButton.innerHTML =
                        '<i class="fas fa-spinner fa-spin mr-2"></i>Menyimpan...';
                    submitButton.disabled = true;

                    try {
                        const response = await fetch(this.action, {
                            method: this.method,
                            body: formData,
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest',
                                'X-CSRF-TOKEN': document.querySelector(
                                    'meta[name="csrf-token"]').getAttribute(
                                    'content')
                            }
                        });

                        const result = await response.json();

                        if (response.ok) {
                            showNotification(result.message || 'Perubahan berhasil disimpan!',
                                'success');
                        } else {
                            throw new Error(result.message || 'Terjadi kesalahan');
                        }

                    } catch (error) {
                        showNotification(error.message, 'error');
                    } finally {
                        submitButton.innerHTML = originalText;
                        submitButton.disabled = false;
                    }
                });
            });

            // Avatar upload dengan AJAX
            const avatarUpload = document.getElementById('avatarUpload');
            avatarUpload.addEventListener('change', async function(e) {
                const file = e.target.files[0];
                if (file) {
                    const formData = new FormData();
                    formData.append('avatar', file);

                    try {
                        const response = await fetch('{{ route('profile.avatar') }}', {
                            method: 'POST',
                            body: formData,
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest',
                                'X-CSRF-TOKEN': document.querySelector(
                                    'meta[name="csrf-token"]').getAttribute('content')
                            }
                        });

                        const result = await response.json();

                        if (response.ok) {
                            document.getElementById('profileAvatar').src = URL.createObjectURL(file);
                            showNotification('Foto profil berhasil diubah!', 'success');
                        } else {
                            throw new Error(result.message || 'Terjadi kesalahan');
                        }

                    } catch (error) {
                        showNotification(error.message, 'error');
                    }
                }
            });

            // Notification function
            function showNotification(message, type = 'info') {
                // Create notification element
                const notification = document.createElement('div');
                notification.className = `fixed top-4 right-4 z-50 p-4 rounded-lg shadow-lg transform transition-transform duration-300 ${
                    type === 'success' ? 'bg-success text-white' : 
                    type === 'error' ? 'bg-accent text-white' : 
                    'bg-primary text-white'
                }`;
                notification.innerHTML = `
                    <div class="flex items-center">
                        <i class="fas fa-${type === 'success' ? 'check-circle' : type === 'error' ? 'exclamation-triangle' : 'info-circle'} mr-2"></i>
                        <span>${message}</span>
                    </div>
                `;

                document.body.appendChild(notification);

                // Remove notification after 3 seconds
                setTimeout(() => {
                    notification.remove();
                }, 3000);
            }
        });
    </script>

</body>

</html>
