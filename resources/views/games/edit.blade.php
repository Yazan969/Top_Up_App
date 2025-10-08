<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit {{ $game->name }} | Toko Top Up</title>
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

        .form-container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
            padding: 2rem;
            margin: 2rem auto;
            max-width: 800px;
        }

        .form-title {
            color: var(--primary);
            font-weight: 700;
            margin-bottom: 1.5rem;
            text-align: center;
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

        .form-control {
            border-radius: 10px;
            padding: 0.75rem 1rem;
            border: 2px solid #e0e0e0;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.25rem rgba(108, 92, 231, 0.25);
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
        <div class="form-container">
            <h2 class="form-title"><i class="fas fa-edit me-2"></i>Edit Game: {{ $game->name }}</h2>
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('games.update', $game->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="name" class="form-label">Nama Game <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $game->name) }}" required>
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <label for="developer" class="form-label">Developer <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="developer" name="developer" value="{{ old('developer', $game->developer) }}" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="category" class="form-label">Kategori <span class="text-danger">*</span></label>
                        <select class="form-control" id="category" name="category" required>
                            <option value="">Pilih Kategori</option>
                            <option value="Mobile" {{ old('category', $game->category) == 'Mobile' ? 'selected' : '' }}>Mobile</option>
                            <option value="PC" {{ old('category', $game->category) == 'PC' ? 'selected' : '' }}>PC</option>
                            <option value="Console" {{ old('category', $game->category) == 'Console' ? 'selected' : '' }}>Console</option>
                        </select>
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <label for="topup_rate" class="form-label">Rate Top Up <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text">Rp</span>
                            <input type="number" step="0.1" class="form-control" id="topup_rate" name="topup_rate" value="{{ old('topup_rate', $game->topup_rate) }}" required>
                        </div>
                        <small class="text-muted">Harga per unit (diamond/koin)</small>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="description" name="description" rows="4" placeholder="Deskripsi game...">{{ old('description', $game->description) }}</textarea>
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('games.show', $game->id) }}" class="btn btn-secondary">
                        <i class="fas fa-times me-2"></i>Batal
                    </a>
                    <button type="submit" class="btn btn-primary-custom">
                        <i class="fas fa-save me-2"></i>Perbarui Game
                    </button>
                </div>
            </form>
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