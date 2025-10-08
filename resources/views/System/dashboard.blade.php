<!-- resources/views/dashboard.blade.php -->
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- Header -->
    <div class="bg-white shadow-sm border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-6">
                <div class="flex-1 min-w-0">
                    <h1 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                        Dashboard
                    </h1>
                    <p class="mt-1 text-sm text-gray-500">
                        Ringkasan performa dan statistik toko top up game
                    </p>
                </div>
                <div class="flex items-center space-x-3">
                    <div class="flex bg-gray-100 rounded-lg p-1">
                        <button type="button" class="px-3 py-2 text-sm font-medium rounded-md bg-white text-gray-900 shadow-sm transition-all duration-200">
                            Hari ini
                        </button>
                        <button type="button" class="px-3 py-2 text-sm font-medium rounded-md text-gray-500 hover:text-gray-900 transition-all duration-200">
                            Minggu ini
                        </button>
                        <button type="button" class="px-3 py-2 text-sm font-medium rounded-md text-gray-500 hover:text-gray-900 transition-all duration-200">
                            Bulan ini
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Stats Grid -->
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4 mb-8">
            <!-- Total Transaksi -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-md transition-shadow duration-200">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-600 mb-1">Total Transaksi</p>
                        <p class="text-3xl font-bold text-gray-900">1,248</p>
                        <p class="text-xs text-green-600 mt-1 flex items-center">
                            <i class="fas fa-arrow-up mr-1 text-xs"></i>
                            +12.5% dari bulan lalu
                        </p>
                    </div>
                    <div class="w-12 h-12 bg-blue-500 rounded-lg flex items-center justify-center">
                        <i class="fas fa-shopping-cart text-white text-xl"></i>
                    </div>
                </div>
                <div class="mt-4 pt-4 border-t border-gray-100">
                    <a href="#" class="text-sm text-blue-600 hover:text-blue-800 font-medium flex items-center justify-between group">
                        Lihat detail
                        <i class="fas fa-chevron-right text-xs transform group-hover:translate-x-1 transition-transform duration-200"></i>
                    </a>
                </div>
            </div>

            <!-- Pendapatan -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-md transition-shadow duration-200">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-600 mb-1">Total Pendapatan</p>
                        <p class="text-3xl font-bold text-gray-900">Rp 12.8Jt</p>
                        <p class="text-xs text-green-600 mt-1 flex items-center">
                            <i class="fas fa-arrow-up mr-1 text-xs"></i>
                            +8.2% dari bulan lalu
                        </p>
                    </div>
                    <div class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center">
                        <i class="fas fa-dollar-sign text-white text-xl"></i>
                    </div>
                </div>
                <div class="mt-4 pt-4 border-t border-gray-100">
                    <a href="#" class="text-sm text-blue-600 hover:text-blue-800 font-medium flex items-center justify-between group">
                        Lihat detail
                        <i class="fas fa-chevron-right text-xs transform group-hover:translate-x-1 transition-transform duration-200"></i>
                    </a>
                </div>
            </div>

            <!-- Pelanggan -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-md transition-shadow duration-200">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-600 mb-1">Total Pelanggan</p>
                        <p class="text-3xl font-bold text-gray-900">892</p>
                        <p class="text-xs text-green-600 mt-1 flex items-center">
                            <i class="fas fa-arrow-up mr-1 text-xs"></i>
                            +5.3% pelanggan baru
                        </p>
                    </div>
                    <div class="w-12 h-12 bg-purple-500 rounded-lg flex items-center justify-center">
                        <i class="fas fa-users text-white text-xl"></i>
                    </div>
                </div>
                <div class="mt-4 pt-4 border-t border-gray-100">
                    <a href="#" class="text-sm text-blue-600 hover:text-blue-800 font-medium flex items-center justify-between group">
                        Lihat detail
                        <i class="fas fa-chevron-right text-xs transform group-hover:translate-x-1 transition-transform duration-200"></i>
                    </a>
                </div>
            </div>

            <!-- Game Tersedia -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-md transition-shadow duration-200">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-600 mb-1">Game Tersedia</p>
                        <p class="text-3xl font-bold text-gray-900">15</p>
                        <p class="text-xs text-blue-600 mt-1 flex items-center">
                            <i class="fas fa-plus mr-1 text-xs"></i>
                            2 game baru
                        </p>
                    </div>
                    <div class="w-12 h-12 bg-orange-500 rounded-lg flex items-center justify-center">
                        <i class="fas fa-gamepad text-white text-xl"></i>
                    </div>
                </div>
                <div class="mt-4 pt-4 border-t border-gray-100">
                    <a href="{{ route('games.index') }}" class="text-sm text-blue-600 hover:text-blue-800 font-medium flex items-center justify-between group">
                        Lihat detail
                        <i class="fas fa-chevron-right text-xs transform group-hover:translate-x-1 transition-transform duration-200"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Charts Section -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
            <!-- Revenue Chart -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                    <div class="flex justify-between items-center mb-6">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">Pendapatan Bulanan</h3>
                            <p class="text-sm text-gray-500">Ringkasan pendapatan 12 bulan terakhir</p>
                        </div>
                        <div class="flex space-x-2">
                            <button class="px-3 py-1 text-xs bg-blue-100 text-blue-700 rounded-lg font-medium hover:bg-blue-200 transition-colors duration-200">
                                Export
                            </button>
                        </div>
                    </div>
                    <div class="chart-container" style="height: 300px;">
                        <canvas id="revenueChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- Game Popularity Chart -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                    <div class="flex justify-between items-center mb-6">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">Game Populer</h3>
                            <p class="text-sm text-gray-500">Distribusi transaksi per game</p>
                        </div>
                        <button class="px-3 py-1 text-xs bg-gray-100 text-gray-700 rounded-lg font-medium hover:bg-gray-200 transition-colors duration-200">
                            Lihat Semua
                        </button>
                    </div>
                    <div class="chart-container" style="height: 300px;">
                        <canvas id="gameChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Transactions & Quick Actions -->
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
            <!-- Recent Transactions -->
            <div class="lg:col-span-3">
                <div class="bg-white rounded-xl shadow-sm border border-gray-200">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <div class="flex justify-between items-center">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900">Transaksi Terbaru</h3>
                                <p class="text-sm text-gray-500">5 transaksi terakhir</p>
                            </div>
                            <a href="{{ route('transactions.index') }}" class="text-sm text-blue-600 hover:text-blue-800 font-medium flex items-center">
                                Lihat semua
                                <i class="fas fa-chevron-right ml-1 text-xs"></i>
                            </a>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        ID Transaksi
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Game
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Item
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Pelanggan
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Jumlah
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Tanggal
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr class="hover:bg-gray-50 transition-colors duration-150">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-blue-600">
                                        #TRX-1289
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        <div class="flex items-center">
                                            <div class="w-8 h-8 bg-red-100 rounded-lg flex items-center justify-center mr-3">
                                                <i class="fas fa-mobile-alt text-red-600 text-xs"></i>
                                            </div>
                                            Mobile Legends
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        100 Diamonds
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        john_doe
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-semibold">
                                        Rp 25,000
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                            <i class="fas fa-check-circle mr-1 text-xs"></i>
                                            Selesai
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        10 Nov 2023
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50 transition-colors duration-150">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-blue-600">
                                        #TRX-1288
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        <div class="flex items-center">
                                            <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center mr-3">
                                                <i class="fas fa-crosshairs text-blue-600 text-xs"></i>
                                            </div>
                                            PUBG Mobile
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        600 UC
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        gamer123
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-semibold">
                                        Rp 80,000
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                            <i class="fas fa-check-circle mr-1 text-xs"></i>
                                            Selesai
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        10 Nov 2023
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50 transition-colors duration-150">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-blue-600">
                                        #TRX-1287
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        <div class="flex items-center">
                                            <div class="w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center mr-3">
                                                <i class="fas fa-wind text-green-600 text-xs"></i>
                                            </div>
                                            Genshin Impact
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        300 Genesis Crystals
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        anime_lover
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-semibold">
                                        Rp 75,000
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                            <i class="fas fa-clock mr-1 text-xs"></i>
                                            Pending
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        9 Nov 2023
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50 transition-colors duration-150">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-blue-600">
                                        #TRX-1286
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        <div class="flex items-center">
                                            <div class="w-8 h-8 bg-yellow-100 rounded-lg flex items-center justify-center mr-3">
                                                <i class="fas fa-fire text-yellow-600 text-xs"></i>
                                            </div>
                                            Free Fire
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        100 Diamonds
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        ff_pro
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-semibold">
                                        Rp 15,000
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                            <i class="fas fa-check-circle mr-1 text-xs"></i>
                                            Selesai
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        9 Nov 2023
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50 transition-colors duration-150">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-blue-600">
                                        #TRX-1285
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        <div class="flex items-center">
                                            <div class="w-8 h-8 bg-purple-100 rounded-lg flex items-center justify-center mr-3">
                                                <i class="fas fa-crosshairs text-purple-600 text-xs"></i>
                                            </div>
                                            Valorant
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        1000 Points
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        valorant_gamer
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-semibold">
                                        Rp 120,000
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                            <i class="fas fa-times-circle mr-1 text-xs"></i>
                                            Gagal
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        8 Nov 2023
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Quick Actions & Stats -->
            <div class="lg:col-span-1">
                <!-- Quick Actions -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mb-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Quick Actions</h3>
                    <div class="space-y-3">
                        <a href="{{ route('games.create') }}" class="w-full flex items-center justify-between p-3 bg-blue-50 hover:bg-blue-100 rounded-lg transition-colors duration-200 group">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-blue-500 rounded-lg flex items-center justify-center mr-3">
                                    <i class="fas fa-plus text-white text-sm"></i>
                                </div>
                                <span class="text-sm font-medium text-gray-900">Tambah Game</span>
                            </div>
                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-blue-600 text-xs"></i>
                        </a>
                        <a href="{{ route('transactions.index') }}" class="w-full flex items-center justify-between p-3 bg-green-50 hover:bg-green-100 rounded-lg transition-colors duration-200 group">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-green-500 rounded-lg flex items-center justify-center mr-3">
                                    <i class="fas fa-exchange-alt text-white text-sm"></i>
                                </div>
                                <span class="text-sm font-medium text-gray-900">Kelola Transaksi</span>
                            </div>
                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-green-600 text-xs"></i>
                        </a>
                        <a href="{{ route('customers.index') }}" class="w-full flex items-center justify-between p-3 bg-purple-50 hover:bg-purple-100 rounded-lg transition-colors duration-200 group">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-purple-500 rounded-lg flex items-center justify-center mr-3">
                                    <i class="fas fa-users text-white text-sm"></i>
                                </div>
                                <span class="text-sm font-medium text-gray-900">Lihat Pelanggan</span>
                            </div>
                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-purple-600 text-xs"></i>
                        </a>
                    </div>
                </div>

                <!-- System Status -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">System Status</h3>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-600">Server Status</span>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                <i class="fas fa-circle mr-1 text-xs"></i>
                                Online
                            </span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-600">API Response</span>
                            <span class="text-sm font-medium text-gray-900">128ms</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-600">Active Sessions</span>
                            <span class="text-sm font-medium text-gray-900">24</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-600">Uptime</span>
                            <span class="text-sm font-medium text-gray-900">99.8%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<!-- JavaScript charts code dari sebelumnya -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Revenue Chart
        const revenueCtx = document.getElementById('revenueChart').getContext('2d');
        const revenueChart = new Chart(revenueCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
                datasets: [{
                    label: 'Pendapatan (Juta Rupiah)',
                    data: [8, 9.5, 7.8, 10.2, 9.1, 11.5, 12.8, 10.9, 11.2, 12.5, 13.2, 14.1],
                    backgroundColor: 'rgba(59, 130, 246, 0.1)',
                    borderColor: 'rgba(59, 130, 246, 1)',
                    borderWidth: 3,
                    tension: 0.4,
                    fill: true,
                    pointBackgroundColor: 'rgba(59, 130, 246, 1)',
                    pointBorderColor: '#fff',
                    pointBorderWidth: 2,
                    pointRadius: 5,
                    pointHoverRadius: 7
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: true,
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return `Rp ${context.parsed.y} Juta`;
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            callback: function(value) {
                                return 'Rp ' + value + ' Jt';
                            }
                        }
                    }
                }
            }
        });

        // Game Popularity Chart
        const gameCtx = document.getElementById('gameChart').getContext('2d');
        const gameChart = new Chart(gameCtx, {
            type: 'doughnut',
            data: {
                labels: ['Mobile Legends', 'PUBG Mobile', 'Free Fire', 'Genshin Impact', 'Valorant'],
                datasets: [{
                    data: [35, 25, 20, 15, 5],
                    backgroundColor: [
                        'rgba(239, 68, 68, 0.8)',
                        'rgba(59, 130, 246, 0.8)',
                        'rgba(245, 158, 11, 0.8)',
                        'rgba(16, 185, 129, 0.8)',
                        'rgba(139, 92, 246, 0.8)'
                    ],
                    borderWidth: 2,
                    hoverOffset: 8
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                cutout: '65%',
                plugins: {
                    legend: {
                        position: 'bottom',
                    }
                }
            }
        });
    });
</script>
@endsection