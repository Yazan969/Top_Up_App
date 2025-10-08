<!-- resources/views/partials/sidebar.blade.php -->
<nav id="sidebar" class="fixed top-0 left-0 z-40 h-screen bg-gray-900 shadow-xl transform transition-transform duration-300 ease-in-out lg:translate-x-0 -translate-x-full sidebar-transition"
     style="width: 280px;">
    <div class="flex flex-col h-full">
        <!-- Logo & Brand -->
        <div class="flex-shrink-0 px-6 py-6 border-b border-gray-700">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl flex items-center justify-center shadow-lg">
                    <i class="fas fa-gamepad text-white text-lg"></i>
                </div>
                <div>
                    <h1 class="text-xl font-bold text-white">TopUp Game</h1>
                    <p class="text-xs text-gray-400 mt-1">Admin Dashboard</p>
                </div>
            </div>
        </div>

        <!-- Navigation Menu -->
        <div class="flex-1 overflow-y-auto custom-scrollbar py-6">
            <ul class="space-y-2 px-4">
                <!-- Dashboard -->
                <li>
                    <a href="{{ route('dashboardAdmin') }}" 
                       class="nav-link group flex items-center px-4 py-3 text-gray-300 rounded-xl transition-all duration-200 hover:bg-gray-800 hover:text-white {{ request()->routeIs('dashboard') ? 'bg-blue-600 text-white shadow-lg shadow-blue-500/25 nav-item-active' : '' }}">
                        <div class="w-8 h-8 flex items-center justify-center mr-3">
                            <i class="fas fa-home text-lg {{ request()->routeIs('dashboard') ? 'text-white' : 'text-gray-400 group-hover:text-white' }}"></i>
                        </div>
                        <span class="font-medium">Dashboard</span>
                        @if(request()->routeIs('dashboard'))
                        <div class="ml-auto w-2 h-2 bg-white rounded-full animate-pulse"></div>
                        @endif
                    </a>
                </li>

                <!-- Games -->
                <li>
                    <a href="{{ route('games.index') }}" 
                       class="nav-link group flex items-center px-4 py-3 text-gray-300 rounded-xl transition-all duration-200 hover:bg-gray-800 hover:text-white {{ request()->routeIs('games.*') ? 'bg-blue-600 text-white shadow-lg shadow-blue-500/25 nav-item-active' : '' }}">
                        <div class="w-8 h-8 flex items-center justify-center mr-3">
                            <i class="fas fa-gamepad text-lg {{ request()->routeIs('games.*') ? 'text-white' : 'text-gray-400 group-hover:text-white' }}"></i>
                        </div>
                        <span class="font-medium">Daftar Game</span>
                        @if(request()->routeIs('games.*'))
                        <div class="ml-auto w-2 h-2 bg-white rounded-full animate-pulse"></div>
                        @endif
                    </a>
                </li>

                <!-- Transactions -->
                <li>
                    <a href="{{ route('transactions.index') }}" 
                       class="nav-link group flex items-center px-4 py-3 text-gray-300 rounded-xl transition-all duration-200 hover:bg-gray-800 hover:text-white {{ request()->routeIs('transactions.*') ? 'bg-blue-600 text-white shadow-lg shadow-blue-500/25 nav-item-active' : '' }}">
                        <div class="w-8 h-8 flex items-center justify-center mr-3">
                            <i class="fas fa-exchange-alt text-lg {{ request()->routeIs('transactions.*') ? 'text-white' : 'text-gray-400 group-hover:text-white' }}"></i>
                        </div>
                        <span class="font-medium">Transaksi</span>
                        @if(request()->routeIs('transactions.*'))
                        <div class="ml-auto w-2 h-2 bg-white rounded-full animate-pulse"></div>
                        @endif
                    </a>
                </li>

                <!-- Customers -->
                <li>
                    <a href="{{ route('customers.index') }}" 
                       class="nav-link group flex items-center px-4 py-3 text-gray-300 rounded-xl transition-all duration-200 hover:bg-gray-800 hover:text-white {{ request()->routeIs('customers.*') ? 'bg-blue-600 text-white shadow-lg shadow-blue-500/25 nav-item-active' : '' }}">
                        <div class="w-8 h-8 flex items-center justify-center mr-3">
                            <i class="fas fa-users text-lg {{ request()->routeIs('customers.*') ? 'text-white' : 'text-gray-400 group-hover:text-white' }}"></i>
                        </div>
                        <span class="font-medium">Pelanggan</span>
                        @if(request()->routeIs('customers.*'))
                        <div class="ml-auto w-2 h-2 bg-white rounded-full animate-pulse"></div>
                        @endif
                    </a>
                </li>

                <!-- Reports -->
                <li>
                    <a href="#" 
                       class="nav-link group flex items-center px-4 py-3 text-gray-300 rounded-xl transition-all duration-200 hover:bg-gray-800 hover:text-white">
                        <div class="w-8 h-8 flex items-center justify-center mr-3">
                            <i class="fas fa-chart-bar text-lg text-gray-400 group-hover:text-white"></i>
                        </div>
                        <span class="font-medium">Laporan</span>
                    </a>
                </li>

                <!-- Settings -->
                <li>
                    <a href="#" 
                       class="nav-link group flex items-center px-4 py-3 text-gray-300 rounded-xl transition-all duration-200 hover:bg-gray-800 hover:text-white">
                        <div class="w-8 h-8 flex items-center justify-center mr-3">
                            <i class="fas fa-cog text-lg text-gray-400 group-hover:text-white"></i>
                        </div>
                        <span class="font-medium">Pengaturan</span>
                    </a>
                </li>
            </ul>

            <!-- Divider -->
            <div class="border-t border-gray-700 mx-4 my-6"></div>

            <!-- Quick Stats -->
            <div class="px-4 space-y-3">
                <div class="bg-gray-800 rounded-xl p-4">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-xs text-gray-400">Total Transaksi</span>
                        <span class="text-xs font-medium text-green-400">+12%</span>
                    </div>
                    <p class="text-lg font-bold text-white">1,234</p>
                </div>
                
                <div class="bg-gray-800 rounded-xl p-4">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-xs text-gray-400">Active Games</span>
                        <span class="text-xs font-medium text-blue-400">24</span>
                    </div>
                    <p class="text-lg font-bold text-white">{{ \App\Models\Game::where('is_active', true)->count() }}</p>
                </div>
            </div>
        </div>

        <!-- User Profile & Logout -->
        <div class="flex-shrink-0 border-t border-gray-700 p-6">
            <!-- User Info -->
            <div class="flex items-center space-x-3 mb-4">
                <div class="w-10 h-10 bg-gradient-to-br from-green-500 to-blue-500 rounded-full flex items-center justify-center shadow-lg">
                    <span class="text-white font-semibold text-sm">{{ strtoupper(substr(auth()->user()->name, 0, 1)) }}</span>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-sm font-medium text-white truncate">{{ auth()->user()->name }}</p>
                    <p class="text-xs text-gray-400 truncate">{{ auth()->user()->email }}</p>
                </div>
            </div>

            <!-- Logout Button -->
            <form method="POST" action="{{ route('logout') }}" class="w-full">
                @csrf
                <button type="submit" 
                        class="w-full flex items-center justify-center px-4 py-3 bg-red-600 hover:bg-red-700 text-white rounded-xl transition-all duration-200 shadow-lg hover:shadow-red-500/25 group">
                    <i class="fas fa-sign-out-alt mr-3 transition-transform group-hover:translate-x-1"></i>
                    <span class="font-medium">Keluar</span>
                </button>
            </form>
        </div>
    </div>

    <!-- Mobile Close Button -->
    <button id="sidebarClose" class="lg:hidden absolute top-4 right-4 p-2 text-gray-400 hover:text-white transition-colors">
        <i class="fas fa-times text-xl"></i>
    </button>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const sidebar = document.getElementById('sidebar');
        const sidebarClose = document.getElementById('sidebarClose');
        const mobileOverlay = document.getElementById('mobileOverlay');

        // Close sidebar on mobile
        if (sidebarClose) {
            sidebarClose.addEventListener('click', function() {
                sidebar.classList.add('-translate-x-full');
                if (mobileOverlay) {
                    mobileOverlay.classList.add('hidden');
                }
            });
        }

        // Add active state animation
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                // Remove active class from all links
                navLinks.forEach(l => l.classList.remove('bg-blue-600', 'text-white', 'shadow-lg', 'shadow-blue-500/25', 'nav-item-active'));
                
                // Add active class to clicked link
                this.classList.add('bg-blue-600', 'text-white', 'shadow-lg', 'shadow-blue-500/25', 'nav-item-active');
            });
        });

        // Add hover effects for icons
        const navIcons = document.querySelectorAll('.nav-link i');
        navLinks.forEach(link => {
            link.addEventListener('mouseenter', function() {
                const icon = this.querySelector('i');
                if (icon && !this.classList.contains('bg-blue-600')) {
                    icon.classList.add('transform', 'scale-110');
                }
            });
            
            link.addEventListener('mouseleave', function() {
                const icon = this.querySelector('i');
                if (icon) {
                    icon.classList.remove('transform', 'scale-110');
                }
            });
        });

        // Keyboard navigation
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && !sidebar.classList.contains('-translate-x-full')) {
                sidebar.classList.add('-translate-x-full');
                if (mobileOverlay) {
                    mobileOverlay.classList.add('hidden');
                }
            }
        });
    });
</script>

<style>
    .nav-item-active {
        position: relative;
        background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
    }

    .nav-item-active::before {
        content: '';
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        width: 4px;
        height: 60%;
        background: linear-gradient(to bottom, #60a5fa, #93c5fd);
        border-radius: 0 4px 4px 0;
        animation: slideIn 0.3s ease-out;
    }

    .nav-link {
        position: relative;
        overflow: hidden;
    }

    .nav-link::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        transform: translate(-50%, -50%);
        transition: width 0.3s, height 0.3s;
    }

    .nav-link:hover::after {
        width: 100px;
        height: 100px;
    }

    /* Custom scrollbar for sidebar */
    #sidebar::-webkit-scrollbar {
        width: 4px;
    }

    #sidebar::-webkit-scrollbar-track {
        background: #374151;
    }

    #sidebar::-webkit-scrollbar-thumb {
        background: #6b7280;
        border-radius: 2px;
    }

    #sidebar::-webkit-scrollbar-thumb:hover {
        background: #9ca3af;
    }

    /* Animation for active state */
    @keyframes slideIn {
        from {
            transform: translateY(-50%) scaleX(0);
        }
        to {
            transform: translateY(-50%) scaleX(1);
        }
    }

    /* Gradient text effect */
    .gradient-text {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
</style>