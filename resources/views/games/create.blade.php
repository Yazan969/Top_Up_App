<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Game | Toko Top Up</title>
    
    <!-- Tailwind CSS v3 -->
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
                        primary: {
                            50: '#f0f4ff',
                            500: '#6c5ce7',
                            600: '#5d4fd6',
                            700: '#4d43c4',
                        },
                        secondary: {
                            500: '#a29bfe',
                        },
                        accent: {
                            500: '#fd79a8',
                        },
                        dark: {
                            500: '#2d3436',
                            600: '#1e2224',
                            700: '#0f1112',
                        }
                    },
                    fontFamily: {
                        'poppins': ['Poppins', 'sans-serif'],
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.5s ease-in-out',
                        'slide-up': 'slideUp 0.3s ease-out',
                        'bounce-in': 'bounceIn 0.6s ease-out',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(10px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' },
                        },
                        bounceIn: {
                            '0%': { transform: 'scale(0.3)', opacity: '0' },
                            '50%': { transform: 'scale(1.05)' },
                            '70%': { transform: 'scale(0.9)' },
                            '100%': { transform: 'scale(1)', opacity: '1' },
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
        
        .gradient-bg {
            background: linear-gradient(135deg, #6c5ce7 0%, #a29bfe 100%);
        }
        
        .form-shadow {
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .btn-gradient {
            background: linear-gradient(135deg, #6c5ce7 0%, #a29bfe 100%);
            transition: all 0.3s ease;
        }
        
        .btn-gradient:hover {
            background: linear-gradient(135deg, #5d4fd6 0%, #938cfd 100%);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(108, 92, 231, 0.3);
        }
        
        .drop-zone {
            border: 2px dashed #d1d5db;
            transition: all 0.3s ease;
        }
        
        .drop-zone.dragover {
            border-color: #6c5ce7;
            background-color: #f0f4ff;
            transform: scale(1.02);
        }
        
        .image-preview {
            transition: all 0.3s ease;
        }
        
        .image-preview:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body class="min-h-screen bg-gray-50 flex flex-col font-poppins">
    <!-- Navigation -->
    <nav class="gradient-bg shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <a href="{{ route('games.index') }}" class="flex items-center space-x-3 text-white font-bold text-xl">
                    <div class="w-10 h-10 bg-white bg-opacity-20 rounded-xl flex items-center justify-center">
                        <i class="fas fa-gamepad text-white"></i>
                    </div>
                    <span>Toko Top Up</span>
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-1 py-8">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Form Container -->
            <div class="bg-white rounded-2xl form-shadow p-8 animate-fade-in">
                <!-- Header -->
                <div class="text-center mb-8">
                    <div class="w-16 h-16 bg-gradient-to-br from-primary-500 to-secondary-500 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-plus-circle text-white text-2xl"></i>
                    </div>
                    <h1 class="text-3xl font-bold text-gray-900 mb-2">Tambah Game Baru</h1>
                    <p class="text-gray-600">Tambahkan game baru ke dalam katalog toko top up</p>
                </div>

                <!-- Error Messages -->
                @if ($errors->any())
                <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-xl animate-slide-up">
                    <div class="flex items-center mb-2">
                        <i class="fas fa-exclamation-circle text-red-500 mr-2"></i>
                        <h3 class="text-red-800 font-semibold">Terjadi kesalahan:</h3>
                    </div>
                    <ul class="list-disc list-inside text-red-700 space-y-1">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <!-- Form -->
                <form action="{{ route('games.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    <input type="file" name="logo" accept="image/*">
                    <!-- Upload Foto Section -->
                    <div class="bg-gray-50 rounded-2xl p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                            <i class="fas fa-image mr-2 text-primary-500"></i>
                            Upload Foto Game
                        </h3>
                        
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                            <!-- Upload Area -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-3">
                                    Foto Game <span class="text-red-500">*</span>
                                    <span class="text-xs text-gray-500 font-normal">(Format: JPG, PNG, Max: 2MB)</span>
                                </label>
                                
                                <div 
                                    id="dropZone" 
                                    class="drop-zone border-2 border-dashed rounded-2xl p-6 text-center cursor-pointer transition-all duration-300 hover:border-primary-300 hover:bg-primary-50"
                                >
                                    <input 
                                        type="file" 
                                        id="logo" 
                                        name="logo" 
                                        accept="image/*" 
                                        class="hidden"
                                        required
                                    >
                                    
                                    <div id="uploadContent" class="space-y-3">
                                        <div class="w-12 h-12 bg-primary-100 rounded-xl flex items-center justify-center mx-auto">
                                            <i class="fas fa-cloud-upload-alt text-primary-500 text-xl"></i>
                                        </div>
                                        <div>
                                            <p class="text-sm font-medium text-gray-700">
                                                Klik untuk upload atau drag & drop
                                            </p>
                                            <p class="text-xs text-gray-500 mt-1">
                                                PNG, JPG up to 2MB
                                            </p>
                                        </div>
                                        <button 
                                            type="button" 
                                            onclick="document.getElementById('logo').click()"
                                            class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50 transition-colors duration-200"
                                        >
                                            <i class="fas fa-folder-open mr-2"></i>
                                            Pilih File
                                        </button>
                                    </div>
                                    
                                    <!-- Preview Container -->
                                    <div id="previewContainer" class="hidden">
                                        <div class="relative inline-block">
                                            <img 
                                                id="imagePreview" 
                                                class="w-32 h-32 object-cover rounded-xl shadow-md image-preview"
                                                alt="Preview"
                                            >
                                            <button 
                                                type="button" 
                                                id="removeImage"
                                                class="absolute -top-2 -right-2 w-6 h-6 bg-red-500 text-white rounded-full flex items-center justify-center text-xs hover:bg-red-600 transition-colors duration-200"
                                            >
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                        <p id="fileName" class="text-sm font-medium text-gray-700 mt-2"></p>
                                        <p id="fileSize" class="text-xs text-gray-500"></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Preview & Requirements -->
                            <div class="space-y-4">
                                <div>
                                    <h4 class="text-sm font-medium text-gray-700 mb-2">Preview</h4>
                                    <div class="bg-white border border-gray-200 rounded-xl p-4 text-center">
                                        <div id="staticPreview" class="w-full h-32 bg-gray-100 rounded-lg flex items-center justify-center">
                                            <i class="fas fa-gamepad text-gray-400 text-2xl"></i>
                                        </div>
                                        <p class="text-xs text-gray-500 mt-2">Preview akan muncul setelah memilih file</p>
                                    </div>
                                </div>
                                
                                <div class="bg-blue-50 border border-blue-200 rounded-xl p-4">
                                    <h4 class="text-sm font-medium text-blue-800 mb-2 flex items-center">
                                        <i class="fas fa-info-circle mr-2"></i>
                                        Tips Foto yang Baik
                                    </h4>
                                    <ul class="text-xs text-blue-700 space-y-1">
                                        <li>• Gunakan logo game yang jelas</li>
                                        <li>• Rasio 1:1 (persegi)</li>
                                        <li>• Background transparan atau solid</li>
                                        <li>• Minimal 300x300 pixels</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Row 1: Name & Developer -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Nama Game -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                                Nama Game <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-gamepad text-gray-400"></i>
                                </div>
                                <input 
                                    type="text" 
                                    id="name" 
                                    name="name" 
                                    value="{{ old('name') }}" 
                                    required
                                    class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all duration-200"
                                    placeholder="Masukkan nama game"
                                >
                            </div>
                        </div>

                        <!-- Developer -->
                        <div>
                            <label for="developer" class="block text-sm font-medium text-gray-700 mb-2">
                                Developer <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-building text-gray-400"></i>
                                </div>
                                <input 
                                    type="text" 
                                    id="developer" 
                                    name="developer" 
                                    value="{{ old('developer') }}" 
                                    required
                                    class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all duration-200"
                                    placeholder="Nama developer"
                                >
                            </div>
                        </div>
                    </div>

                    <!-- Row 2: Category & Top Up Rate -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Kategori -->
                        <div>
                            <label for="category" class="block text-sm font-medium text-gray-700 mb-2">
                                Kategori <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-tags text-gray-400"></i>
                                </div>
                                <select 
                                    id="category" 
                                    name="category" 
                                    required
                                    class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all duration-200 appearance-none"
                                >
                                    <option value="">Pilih Kategori</option>
                                    <option value="Mobile" {{ old('category') == 'Mobile' ? 'selected' : '' }}>Mobile</option>
                                    <option value="PC" {{ old('category') == 'PC' ? 'selected' : '' }}>PC</option>
                                    <option value="Console" {{ old('category') == 'Console' ? 'selected' : '' }}>Console</option>
                                </select>
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <i class="fas fa-chevron-down text-gray-400"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Rate Top Up -->
                        <div>
                            <label for="topup_rate" class="block text-sm font-medium text-gray-700 mb-2">
                                Rate Top Up <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-money-bill-wave text-gray-400"></i>
                                </div>
                                <input 
                                    type="number" 
                                    step="0.1" 
                                    id="topup_rate" 
                                    name="topup_rate" 
                                    value="{{ old('topup_rate') }}" 
                                    required
                                    class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all duration-200"
                                    placeholder="0.00"
                                >
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <span class="text-gray-500">IDR</span>
                                </div>
                            </div>
                            <p class="mt-2 text-sm text-gray-500">Harga per unit (diamond/koin)</p>
                        </div>
                    </div>

                    <!-- Description -->
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-2">
                            Deskripsi Game
                        </label>
                        <div class="relative">
                            <div class="absolute top-3 left-3 pointer-events-none">
                                <i class="fas fa-file-alt text-gray-400"></i>
                            </div>
                            <textarea 
                                id="description" 
                                name="description" 
                                rows="4"
                                class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all duration-200 resize-none"
                                placeholder="Deskripsi tentang game..."
                            >{{ old('description') }}</textarea>
                        </div>
                    </div>

                    <!-- Status Toggle -->
                    <div class="flex items-center justify-between p-4 bg-gray-50 rounded-xl">
                        <div>
                            <label class="text-sm font-medium text-gray-700">Status Game</label>
                            <p class="text-sm text-gray-500">Aktifkan game untuk ditampilkan di katalog</p>
                        </div>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" name="is_active" value="1" class="sr-only peer" checked>
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary-500"></div>
                            <span class="ml-3 text-sm font-medium text-gray-900">Aktif</span>
                        </label>
                    </div>

                    <!-- Form Actions -->
                    <div class="flex flex-col sm:flex-row justify-between items-center gap-4 pt-6 border-t border-gray-200">
                        <a 
                            href="{{ route('games.index') }}" 
                            class="w-full sm:w-auto flex items-center justify-center px-6 py-3 border border-gray-300 text-gray-700 rounded-xl hover:bg-gray-50 transition-all duration-200 font-medium"
                        >
                            <i class="fas fa-arrow-left mr-2"></i>
                            Kembali ke Daftar
                        </a>
                        <button 
                            type="submit" 
                            class="w-full sm:w-auto flex items-center justify-center px-8 py-3 btn-gradient text-white rounded-xl font-semibold shadow-lg hover:shadow-xl transition-all duration-200"
                        >
                            <i class="fas fa-save mr-2"></i>
                            Simpan Game
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-dark-600 text-white py-8 mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <p class="text-gray-300">&copy; 2023 Toko Top Up - Laravel 10. All rights reserved.</p>
                <div class="flex justify-center space-x-4 mt-4">
                    <a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">
                        <i class="fab fa-facebook text-lg"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">
                        <i class="fab fa-instagram text-lg"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">
                        <i class="fab fa-twitter text-lg"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dropZone = document.getElementById('dropZone');
            const fileInput = document.getElementById('logo');
            const uploadContent = document.getElementById('uploadContent');
            const previewContainer = document.getElementById('previewContainer');
            const imagePreview = document.getElementById('imagePreview');
            const fileName = document.getElementById('fileName');
            const fileSize = document.getElementById('fileSize');
            const removeImage = document.getElementById('removeImage');
            const staticPreview = document.getElementById('staticPreview');

            // Drag and drop functionality
            ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
                dropZone.addEventListener(eventName, preventDefaults, false);
            });

            function preventDefaults(e) {
                e.preventDefault();
                e.stopPropagation();
            }

            ['dragenter', 'dragover'].forEach(eventName => {
                dropZone.addEventListener(eventName, highlight, false);
            });

            ['dragleave', 'drop'].forEach(eventName => {
                dropZone.addEventListener(eventName, unhighlight, false);
            });

            function highlight() {
                dropZone.classList.add('dragover');
            }

            function unhighlight() {
                dropZone.classList.remove('dragover');
            }

            // Handle dropped files
            dropZone.addEventListener('drop', handleDrop, false);

            function handleDrop(e) {
                const dt = e.dataTransfer;
                const files = dt.files;
                handleFiles(files);
            }

            // Handle file input change
            fileInput.addEventListener('change', function() {
                handleFiles(this.files);
            });

            function handleFiles(files) {
                if (files.length > 0) {
                    const file = files[0];
                    
                    // Validate file type
                    if (!file.type.match('image.*')) {
                        showError('Hanya file gambar yang diizinkan (JPG, PNG)');
                        return;
                    }
                    
                    // Validate file size (2MB)
                    if (file.size > 2 * 1024 * 1024) {
                        showError('Ukuran file maksimal 2MB');
                        return;
                    }
                    
                    // Preview image
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        imagePreview.src = e.target.result;
                        uploadContent.classList.add('hidden');
                        previewContainer.classList.remove('hidden');
                        previewContainer.classList.add('animate-bounce-in');
                        staticPreview.classList.add('hidden');
                        
                        // Update file info
                        fileName.textContent = file.name;
                        fileSize.textContent = formatFileSize(file.size);
                    };
                    reader.readAsDataURL(file);
                }
            }

            // Remove image
            removeImage.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                
                fileInput.value = '';
                uploadContent.classList.remove('hidden');
                previewContainer.classList.add('hidden');
                staticPreview.classList.remove('hidden');
            });

            // Click on drop zone to trigger file input
            dropZone.addEventListener('click', function() {
                fileInput.click();
            });

            // Utility functions
            function formatFileSize(bytes) {
                if (bytes === 0) return '0 Bytes';
                const k = 1024;
                const sizes = ['Bytes', 'KB', 'MB'];
                const i = Math.floor(Math.log(bytes) / Math.log(k));
                return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
            }

            function showError(message) {
                // Create error notification
                const errorDiv = document.createElement('div');
                errorDiv.className = 'fixed top-4 right-4 bg-red-500 text-white px-6 py-3 rounded-xl shadow-lg z-50 animate-slide-up';
                errorDiv.innerHTML = `
                    <div class="flex items-center">
                        <i class="fas fa-exclamation-triangle mr-2"></i>
                        <span>${message}</span>
                    </div>
                `;
                document.body.appendChild(errorDiv);
                
                // Remove after 5 seconds
                setTimeout(() => {
                    errorDiv.remove();
                }, 5000);
            }

            // Form validation
            const form = document.querySelector('form');
            const inputs = form.querySelectorAll('input[required], select[required], textarea[required]');
            
            inputs.forEach(input => {
                input.addEventListener('blur', function() {
                    validateField(this);
                });
                
                input.addEventListener('input', function() {
                    if (this.classList.contains('border-red-500')) {
                        validateField(this);
                    }
                });
            });
            
            function validateField(field) {
                if (field.value.trim() === '') {
                    field.classList.add('border-red-500', 'bg-red-50');
                    field.classList.remove('border-gray-300', 'bg-white');
                } else {
                    field.classList.remove('border-red-500', 'bg-red-50');
                    field.classList.add('border-gray-300', 'bg-white');
                }
            }
            
            form.addEventListener('submit', function(e) {
                let isValid = true;
                
                // Check file input
                if (!fileInput.files.length) {
                    isValid = false;
                    showError('Harap pilih foto untuk game');
                    dropZone.classList.add('border-red-500');
                }
                
                inputs.forEach(input => {
                    if (input.value.trim() === '') {
                        isValid = false;
                        input.classList.add('border-red-500', 'bg-red-50');
                        
                        input.classList.add('animate-shake');
                        setTimeout(() => {
                            input.classList.remove('animate-shake');
                        }, 500);
                    }
                });
                
                if (!isValid) {
                    e.preventDefault();
                    
                    const firstError = form.querySelector('.border-red-500');
                    if (firstError) {
                        firstError.scrollIntoView({ 
                            behavior: 'smooth', 
                            block: 'center' 
                        });
                    }
                }
            });
        });
    </script>

    <style>
        .animate-shake {
            animation: shake 0.5s ease-in-out;
        }
        
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            75% { transform: translateX(5px); }
        }
        
        /* Custom scrollbar */
        textarea::-webkit-scrollbar {
            width: 6px;
        }
        
        textarea::-webkit-scrollbar-track {
            background: #f1f5f9;
            border-radius: 3px;
        }
        
        textarea::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 3px;
        }
        
        textarea::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }
    </style>
</body>
</html>