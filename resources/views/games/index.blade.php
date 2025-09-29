<!-- resources/views/games/index.blade.php -->
@extends('layouts.app')

@section('title', 'Daftar Game')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Game</h1>
        <a href="{{ route('games.create') }}" class="btn btn-primary">
            <i class="fas fa-plus me-1"></i> Tambah Game
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Logo</th>
                            <th>Nama Game</th>
                            <th>Developer</th>
                            <th>Kategori</th>
                            <th>Rate TopUp</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($games as $game)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                @if($game->logo)
                                    <img src="{{ asset('storage/' . $game->logo) }}" alt="{{ $game->name }}" width="40" height="40" class="rounded">
                                @else
                                    <div class="bg-secondary rounded d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                        <i class="fas fa-gamepad text-white"></i>
                                    </div>
                                @endif
                            </td>
                            <td>{{ $game->name }}</td>
                            <td>{{ $game->developer }}</td>
                            <td>{{ $game->category }}</td>
                            <td>{{ number_format($game->topup_rate, 2) }}</td>
                            <td>
                                <span class="badge {{ $game->is_active ? 'bg-success' : 'bg-danger' }}">
                                    {{ $game->is_active ? 'Aktif' : 'Non-Aktif' }}
                                </span>
                            </td>
                            <td>
                                <a href="{{ route('games.show', $game) }}" class="btn btn-sm btn-info">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('games.edit', $game) }}" class="btn btn-sm btn-primary">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('games.destroy', $game) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="text-center">Tidak ada data game.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection