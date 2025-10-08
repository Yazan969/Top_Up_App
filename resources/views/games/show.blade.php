<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $game->name }} | Toko Top Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #6c5ce7;
            --secondary: #a29bfe;
            --accent: #fd79a8;
            --dark: #2d3436;
            --light: #f8f9fa;
            --success: #00b894;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            color: var(--dark);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .navbar {
            background: linear-gradient(135deg, var(--primary), var(--secondary)) !important;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 0.8rem 1rem;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
        }

        .game-detail-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
            padding: 2rem;
            margin: 2rem auto;
            max-width: 900px;
        }

        .game-header {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 2rem;
            border-radius: 15px;
            margin-bottom: 2rem;
            text-align: center;
        }

        .game-icon {
            font-size: 4rem;
            margin-bottom: 1rem;
        }

        .info-card {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 1.5rem;
            margin-bottom: 1rem;
            border-left: 4px solid var(--primary);
        }

        .btn-primary-custom {
            background: linear-gradient(to right, var(--primary), var(--secondary));
            border: none;
            border-radius: 50px;
            padding: 0.75rem 2rem;
            font-weight: 500;
            transition: all 0.3s ease;
            color: white;
        }

        .btn-primary-custom:hover {
            background: linear-gradient(to right, var(--secondary), var(--primary));
            transform: scale(1.05);
            color: white;
        }

        footer {
            background: var(--dark);
            color: white;
            padding: 2rem 0;
            margin-top: auto;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('games.index') }}">
                <i class="fas fa-gamepad me-2"></i>Toko Top Up
            </a>
        </div>
    </nav>

    <div class="container my-5">
        <div class="game-detail-card">
            <div class="game-header">
                <div class="game-icon">
                    <i class="fas fa-gamepad"></i>
                </div>
                <h1>{{ $game->name }}</h1>
                <p class="mb-0">Detail Informasi Game</p>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="info-card">
                        <h5><i class="fas fa-building me-2"></i>Developer</h5>
                        <p class="mb-0">{{ $game->developer }}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-card">
                        <h5><i class="fas fa-tags me-2"></i>Kategori</h5>
                        <p class="mb-0">{{ $game->category }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="info-card">
                        <h5><i class="fas fa-money-bill-wave me-2"></i>Rate Top Up</h5>
                        <p class="mb-0">Rp {{ number_format($game->topup_rate, 2) }} / unit</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-card">
                        <h5><i class="fas fa-calendar me-2"></i>Tanggal Dibuat</h5>
                        <p class="mb-0">{{ $game->created_at->format('d M Y') }}</p>
                    </div>
                </div>
            </div>

            @if($game->description)
            <div class="info-card">
                <h5><i class="fas fa-file-alt me-2"></i>Deskripsi</h5>
                <p class="mb-0">{{ $game->description }}</p>
            </div>
            @endif

            <div class="d-flex justify-content-between mt-4">
                <a href="{{ route('games.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left me-2"></i>Kembali ke Daftar
                </a>
                <div>
                    <a href="{{ route('games.edit', $game->id) }}" class="btn btn-warning me-2">
                        <i class="fas fa-edit me-2"></i>Edit
                    </a>
                    <form action="{{ route('games.destroy', $game->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus game ini?')">
                            <i class="fas fa-trash me-2"></i>Hapus
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center">
        <div class="container">
            <p>&copy; 2023 Toko Top Up - Laravel 10. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>