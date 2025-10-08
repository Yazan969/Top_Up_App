<!-- resources/views/games/index.blade.php -->
@extends('layouts.app')

@section('title', 'Daftar Game')

@section('content')
    <div class="min-h-screen bg-gray-50 py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header Section -->
            <div class="md:flex md:items-center md:justify-between mb-8">
                <div class="flex-1 min-w-0">
                    <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                        Daftar Game
                    </h2>
                    <p class="mt-1 text-sm text-gray-500">
                        Kelola semua game yang tersedia di platform top up
                    </p>
                </div>
                <div class="mt-4 flex md:mt-0 md:ml-4">
                    <a href="{{ route('games.create') }}"
                        class="ml-3 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <i class="fas fa-plus mr-2"></i>
                        Tambah Game
                    </a>
                </div>
            </div>

            @if (session('success'))
                <div class="rounded-md bg-green-50 p-4 mb-6">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <i class="fas fa-check-circle h-5 w-5 text-green-400"></i>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-green-800">
                                {{ session('success') }}
                            </p>
                        </div>
                    </div>
                </div>
            @endif

            <!-- Games Grid -->
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6 border-b border-gray-200">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        Semua Game
                        @if (method_exists($games, 'total'))
                            ({{ $games->total() }})
                        @else
                            ({{ $games->count() }})
                        @endif
                    </h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">
                        Daftar lengkap game yang terdaftar di sistem
                    </p>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Logo
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nama Game
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Developer
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Kategori
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Rate TopUp
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Status
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse($games as $game)
                                <tr class="hover:bg-gray-50 transition-colors duration-150">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-12 w-12">
                                                <img class="h-12 w-12 rounded-lg object-cover border border-gray-200 shadow-sm"
                                                    src="{{ asset('storage/'. $game->logo) }}" alt="{{ $game->name }}">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-semibold text-gray-900">{{ $game->name }}</div>
                                        @if ($game->description)
                                            <div class="text-sm text-gray-500 truncate max-w-xs">
                                                {{ Str::limit($game->description, 50) }}</div>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{ $game->developer }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                            {{ $game->category }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        Rp {{ number_format($game->topup_rate, 0, ',', '.') }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $game->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                            <span
                                                class="w-2 h-2 rounded-full {{ $game->is_active ? 'bg-green-400' : 'bg-red-400' }} mr-1"></span>
                                            {{ $game->is_active ? 'Aktif' : 'Non-Aktif' }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <div class="flex justify-end space-x-2">
                                            <a href="{{ route('games.show', $game) }}"
                                                class="text-indigo-600 hover:text-indigo-900 transition-colors duration-150"
                                                title="Lihat Detail">
                                                <i class="fas fa-eye w-5 h-5"></i>
                                            </a>
                                            <a href="{{ route('games.edit', $game) }}"
                                                class="text-blue-600 hover:text-blue-900 transition-colors duration-150"
                                                title="Edit Game">
                                                <i class="fas fa-edit w-5 h-5"></i>
                                            </a>
                                            <form action="{{ route('games.destroy', $game) }}" method="POST"
                                                class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="text-red-600 hover:text-red-900 transition-colors duration-150"
                                                    onclick="return confirm('Yakin ingin menghapus game {{ $game->name }}?')"
                                                    title="Hapus Game">
                                                    <i class="fas fa-trash w-5 h-5"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="px-6 py-12 text-center">
                                        <div class="flex flex-col items-center justify-center text-gray-400">
                                            <i class="fas fa-gamepad text-4xl mb-3"></i>
                                            <p class="text-lg font-medium text-gray-900 mb-1">Tidak ada data game</p>
                                            <p class="text-sm">Mulai dengan menambahkan game pertama Anda</p>
                                            <a href="{{ route('games.create') }}"
                                                class="mt-4 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700">
                                                <i class="fas fa-plus mr-2"></i>
                                                Tambah Game Pertama
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Pagination - Fixed -->
                @if (method_exists($games, 'links'))
                    <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
                        <div class="flex-1 flex justify-between items-center">
                            <div>
                                @if (method_exists($games, 'total'))
                                    <p class="text-sm text-gray-700">
                                        Menampilkan
                                        <span class="font-medium">{{ $games->firstItem() ?? 0 }}</span>
                                        sampai
                                        <span class="font-medium">{{ $games->lastItem() ?? 0 }}</span>
                                        dari
                                        <span class="font-medium">{{ $games->total() }}</span>
                                        hasil
                                    </p>
                                @else
                                    <p class="text-sm text-gray-700">
                                        Menampilkan <span class="font-medium">{{ $games->count() }}</span> data
                                    </p>
                                @endif
                            </div>

                            @if (method_exists($games, 'links'))
                                <div>
                                    {{ $games->links() }}
                                </div>
                            @endif
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>


    <!-- Custom Styles -->
    <style>
        .bg-gradient-to-br {
            background: linear-gradient(135deg, var(--tw-gradient-from), var(--tw-gradient-to));
        }

        .hover\:bg-gray-50:hover {
            background-color: #f9fafb;
        }

        .transition-colors {
            transition-property: color, background-color, border-color, fill, stroke;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms;
        }
    </style>

    <script>
        // Auto-dismiss alert after 5 seconds
        document.addEventListener('DOMContentLoaded', function() {
            const alert = document.querySelector('[role="alert"]');
            if (alert) {
                setTimeout(() => {
                    alert.style.opacity = '0';
                    alert.style.transition = 'opacity 0.5s ease';
                    setTimeout(() => alert.remove(), 500);
                }, 5000);
            }

            // Add confirmation for delete actions
            const deleteForms = document.querySelectorAll('form[action*="destroy"]');
            deleteForms.forEach(form => {
                form.addEventListener('submit', function(e) {
                    const gameName = this.closest('tr').querySelector('td:nth-child(3)').textContent
                        .trim();
                    if (!confirm(`Yakin ingin menghapus game "${gameName}"?`)) {
                        e.preventDefault();
                    }
                });
            });
        });
    </script>
@endsection
