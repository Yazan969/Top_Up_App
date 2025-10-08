<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0A2463',
                        secondary: '#1E40AF',
                        accent: '#DC2626',
                        dark: '#0F172A',
                        light: '#F8FAFC',
                        success: '#059669',
                        orange: '#EA580C',
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
                    backgroundImage: {
                        'gradient-dark': 'linear-gradient(135deg, #0A2463 0%, #1E40AF 100%)',
                        'gradient-primary': 'linear-gradient(to right, #0A2463, #1E40AF)',
                        'gradient-primary-hover': 'linear-gradient(to right, #1E40AF, #0A2463)',
                    }
                }
            }
        }
    </script>
    
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .card-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 40px rgba(10, 36, 99, 0.3);
        }
        
        .btn-submit {
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(10, 36, 99, 0.2);
        }
        
        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(10, 36, 99, 0.3);
        }
        
        .btn-submit:active {
            transform: translateY(0);
        }
        
        .form-control {
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            box-shadow: 0 0 0 0.25rem rgba(10, 36, 99, 0.25);
        }
        
        .alert-custom {
            border: none;
            border-radius: 8px;
            padding: 1rem 1.25rem;
            margin-bottom: 1.5rem;
            border-left: 4px solid;
        }
        
        .alert-danger-custom {
            background-color: rgba(220, 38, 38, 0.2);
            color: #f8d7da;
            border-left-color: #DC2626;
        }
        
        .alert-success-custom {
            background-color: rgba(5, 150, 105, 0.2);
            color: #d1e7dd;
            border-left-color: #059669;
        }
    </style>
</head>

<body class="bg-gradient-dark text-gray-50 min-h-screen font-sans">
    <div class="flex justify-center items-center min-h-screen p-6">
        <div class="card-hover w-full max-w-md bg-gray-800 rounded-xl shadow-2xl border border-gray-700">
            <div class="p-10">
                <!-- Logo di tengah -->
                <div class="flex justify-center mb-6">
                    <img src="{{asset('images/L.jpg')}}" class="w-16 h-16 rounded-lg shadow-lg" alt="Logo Toko Top Up">
                </div>
                
                <h2 class="text-2xl font-bold text-center mb-2 text-gray-100">Form Registrasi</h2>
                <p class="text-center text-gray-400 mb-8">Buat akun baru di LIU Store</p>
                
                @if ($errors->any())
                    <div class="alert-custom alert-danger-custom">
                        <ul class="list-disc list-inside space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert-custom alert-success-custom">
                        {{ session('success') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('register.submit') }}">
                    @csrf

                    <div class="mb-6">
                        <label for="name" class="block text-gray-300 font-medium mb-2">Nama:</label>
                        <input type="text" 
                               id="name" 
                               name="name" 
                               value="{{ old('name') }}" 
                               required
                               class="form-control w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-colors duration-200"
                               placeholder="Masukkan nama lengkap Anda">
                    </div>

                    <div class="mb-6">
                        <label for="email" class="block text-gray-300 font-medium mb-2">Email:</label>
                        <input type="email" 
                               id="email" 
                               name="email" 
                               value="{{ old('email') }}" 
                               required
                               class="form-control w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-colors duration-200"
                               placeholder="Masukkan email Anda">
                    </div>

                    <div class="mb-6">
                        <label for="password" class="block text-gray-300 font-medium mb-2">Password:</label>
                        <input type="password" 
                               id="password" 
                               name="password" 
                               required
                               class="form-control w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-colors duration-200"
                               placeholder="Buat password Anda">
                    </div>

                    <div class="mb-8">
                        <label for="password_confirmation" class="block text-gray-300 font-medium mb-2">Konfirmasi Password:</label>
                        <input type="password" 
                               id="password_confirmation" 
                               name="password_confirmation" 
                               required
                               class="form-control w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-colors duration-200"
                               placeholder="Konfirmasi password Anda">
                    </div>

                    <div class="mb-6">
                        <button type="submit" 
                                class="btn-submit w-full bg-gradient-primary text-white font-semibold py-3 px-6 rounded-lg hover:bg-gradient-primary-hover">
                            Daftar
                        </button>
                    </div>
                </form>

                <p class="text-center text-gray-400 mt-6">
                    Sudah punya akun? 
                    <a href="{{ route('login.form') }}" 
                       class="text-secondary font-medium hover:text-primary transition-colors duration-200 ml-1">
                        Login
                    </a>
                </p>
            </div>
        </div>
    </div>
</body>
</html>