<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TopUp Game Dashboard - @yield('title')</title>
    
    <!-- Tailwind CSS v3 -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#eff6ff',
                            100: '#dbeafe',
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8',
                        },
                        success: {
                            50: '#f0fdf4',
                            100: '#dcfce7',
                            500: '#22c55e',
                            600: '#16a34a',
                            700: '#15803d',
                        },
                        warning: {
                            50: '#fffbeb',
                            100: '#fef3c7',
                            500: '#f59e0b',
                            600: '#d97706',
                            700: '#b45309',
                        },
                        danger: {
                            50: '#fef2f2',
                            100: '#fee2e2',
                            500: '#ef4444',
                            600: '#dc2626',
                            700: '#b91c1c',
                        }
                    },
                    fontFamily: {
                        'inter': ['Inter', 'sans-serif'],
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.5s ease-in-out',
                        'slide-in': 'slideIn 0.3s ease-out',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        slideIn: {
                            '0%': { transform: 'translateX(-100%)' },
                            '100%': { transform: 'translateX(0)' },
                        }
                    }
                }
            }
        }
    </script>
    
    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        
        .sidebar-transition {
            transition: all 0.3s ease-in-out;
        }
        
        .content-transition {
            transition: margin-left 0.3s ease-in-out;
        }
        
        .nav-item-active {
            position: relative;
        }
        
        .nav-item-active::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 4px;
            height: 70%;
            background-color: #3b82f6;
            border-radius: 0 4px 4px 0;
        }
        
        /* Custom scrollbar */
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }
        
        .custom-scrollbar::-webkit-scrollbar-track {
            background: #f1f5f9;
            border-radius: 3px;
        }
        
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 3px;
        }
        
        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }
        
        /* Loading animation */
        .loading-dots {
            display: inline-block;
            position: relative;
            width: 80px;
            height: 80px;
        }
        
        .loading-dots div {
            position: absolute;
            top: 33px;
            width: 13px;
            height: 13px;
            border-radius: 50%;
            background: #3b82f6;
            animation-timing-function: cubic-bezier(0, 1, 1, 0);
        }
        
        .loading-dots div:nth-child(1) {
            left: 8px;
            animation: loading-dots1 0.6s infinite;
        }
        
        .loading-dots div:nth-child(2) {
            left: 8px;
            animation: loading-dots2 0.6s infinite;
        }
        
        .loading-dots div:nth-child(3) {
            left: 32px;
            animation: loading-dots2 0.6s infinite;
        }
        
        .loading-dots div:nth-child(4) {
            left: 56px;
            animation: loading-dots3 0.6s infinite;
        }
        
        @keyframes loading-dots1 {
            0% { transform: scale(0); }
            100% { transform: scale(1); }
        }
        
        @keyframes loading-dots3 {
            0% { transform: scale(1); }
            100% { transform: scale(0); }
        }
        
        @keyframes loading-dots2 {
            0% { transform: translate(0, 0); }
            100% { transform: translate(24px, 0); }
        }
    </style>
    
    @yield('styles')
</head>
<body class="bg-gray-50 font-inter">
    <!-- Loading Overlay -->
    <div id="loadingOverlay" class="fixed inset-0 bg-white bg-opacity-90 flex items-center justify-center z-50 hidden">
        <div class="text-center">
            <div class="loading-dots inline-block">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <p class="mt-4 text-gray-600 font-medium">Memuat...</p>
        </div>
    </div>

    @if(!request()->routeIs('login') && !request()->routeIs('register'))
        <!-- Mobile Sidebar Overlay -->
        <div id="mobileOverlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 lg:hidden hidden"></div>

        <!-- Sidebar -->
        @include('partials.sidebar')
    @endif
    
    <!-- Main Content -->
    <main class="min-h-screen transition-all duration-300 ease-in-out @if(!request()->routeIs('login') && !request()->routeIs('register')) lg:ml-64 @endif">
        @if(!request()->routeIs('login') && !request()->routeIs('register'))
            <!-- Top Navigation -->
            <nav class="bg-white shadow-sm border-b border-gray-200 sticky top-0 z-30">
                <div class="px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between items-center h-16">
                        <!-- Left side - Mobile menu button -->
                        <div class="flex items-center lg:hidden">
                            <button id="sidebarToggle" type="button" 
                                    class="p-2 rounded-md text-gray-600 hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary-500">
                                <i class="fas fa-bars w-5 h-5"></i>
                            </button>
                        </div>
                        
                    </div>
                </div>
            </nav>
        @endif

        <!-- Page Content -->
        <div class="@if(!request()->routeIs('login') && !request()->routeIs('register')) p-4 sm:p-6 lg:p-8 @else p-0 @endif">
            @yield('content')
        </div>

        <!-- Footer -->
        @if(!request()->routeIs('login') && !request()->routeIs('register'))
            <footer class="bg-white border-t border-gray-200 mt-auto">
                <div class="px-4 sm:px-6 lg:px-8 py-4">
                    <div class="flex flex-col sm:flex-row justify-between items-center">
                        <p class="text-sm text-gray-600">
                            &copy; {{ date('Y') }} TopUp Game Dashboard. All rights reserved.
                        </p>
                        <div class="flex space-x-6 mt-2 sm:mt-0">
                            <a href="#" class="text-sm text-gray-600 hover:text-gray-900">Privacy Policy</a>
                            <a href="#" class="text-sm text-gray-600 hover:text-gray-900">Terms of Service</a>
                            <a href="#" class="text-sm text-gray-600 hover:text-gray-900">Support</a>
                        </div>
                    </div>
                </div>
            </footer>
        @endif
    </main>

    <!-- Alpine.js for interactivity -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <script>
        // Mobile sidebar toggle
        document.addEventListener('DOMContentLoaded', function() {
            const sidebar = document.getElementById('sidebar');
            const sidebarToggle = document.getElementById('sidebarToggle');
            const mobileOverlay = document.getElementById('mobileOverlay');
            const loadingOverlay = document.getElementById('loadingOverlay');

            // Toggle sidebar on mobile
            if (sidebarToggle) {
                sidebarToggle.addEventListener('click', function() {
                    sidebar.classList.toggle('-translate-x-full');
                    mobileOverlay.classList.toggle('hidden');
                });
            }

            // Close sidebar when clicking on overlay
            if (mobileOverlay) {
                mobileOverlay.addEventListener('click', function() {
                    sidebar.classList.add('-translate-x-full');
                    mobileOverlay.classList.add('hidden');
                });
            }

            // Show loading overlay on page transitions
            const links = document.querySelectorAll('a:not([target="_blank"])');
            links.forEach(link => {
                link.addEventListener('click', function(e) {
                    if (this.href && !this.href.includes('javascript:')) {
                        loadingOverlay.classList.remove('hidden');
                    }
                });
            });

            // Hide loading overlay when page is fully loaded
            window.addEventListener('load', function() {
                setTimeout(() => {
                    loadingOverlay.classList.add('hidden');
                }, 500);
            });

            // Auto-hide alerts after 5 seconds
            const alerts = document.querySelectorAll('[role="alert"]');
            alerts.forEach(alert => {
                setTimeout(() => {
                    alert.style.opacity = '0';
                    alert.style.transition = 'opacity 0.5s ease';
                    setTimeout(() => alert.remove(), 500);
                }, 5000);
            });

            // Add smooth scrolling
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
        });

        // Utility functions
        const Utils = {
            // Format currency
            formatCurrency: (amount) => {
                return new Intl.NumberFormat('id-ID', {
                    style: 'currency',
                    currency: 'IDR',
                    minimumFractionDigits: 0
                }).format(amount);
            },

            // Format date
            formatDate: (date) => {
                return new Intl.DateTimeFormat('id-ID', {
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric'
                }).format(new Date(date));
            },

            // Show notification
            showNotification: (message, type = 'success') => {
                const notification = document.createElement('div');
                notification.className = `fixed top-4 right-4 p-4 rounded-lg shadow-lg z-50 animate-fade-in ${
                    type === 'success' ? 'bg-green-500 text-white' :
                    type === 'error' ? 'bg-red-500 text-white' :
                    type === 'warning' ? 'bg-yellow-500 text-black' :
                    'bg-blue-500 text-white'
                }`;
                notification.innerHTML = `
                    <div class="flex items-center">
                        <i class="fas fa-${
                            type === 'success' ? 'check-circle' :
                            type === 'error' ? 'exclamation-circle' :
                            type === 'warning' ? 'exclamation-triangle' :
                            'info-circle'
                        } mr-2"></i>
                        <span>${message}</span>
                        <button onclick="this.parentElement.parentElement.remove()" class="ml-4">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                `;
                document.body.appendChild(notification);
                
                setTimeout(() => {
                    if (notification.parentElement) {
                        notification.remove();
                    }
                }, 5000);
            }
        };
    </script>
    
    @yield('scripts')
</body>
</html>