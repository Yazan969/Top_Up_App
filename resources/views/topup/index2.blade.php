<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Top Up | Toko Top Up</title>
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

        .nav-link {
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-link:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: white;
            transition: width 0.3s ease;
        }

        .nav-link:hover:after {
            width: 100%;
        }

        .dropdown-menu {
            border: none;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .dropdown-item {
            transition: all 0.3s ease;
        }

        .dropdown-item:hover {
            background: var(--secondary);
            color: white;
        }

        .user-avatar {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid white;
        }

        /* Sisa CSS tetap sama seperti sebelumnya */
        .hero-section {
            background: linear-gradient(rgba(108, 92, 231, 0.9), rgba(108, 92, 231, 0.8)), url('https://images.unsplash.com/photo-1550745165-9bc0b252726f?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 4rem 0;
            margin-bottom: 3rem;
            border-radius: 0 0 20px 20px;
        }

        .game-card {
            transition: all 0.3s ease;
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
            margin-bottom: 25px;
            background: white;
        }

        .game-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .game-card img {
            height: 200px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .game-card:hover img {
            transform: scale(1.05);
        }

        .game-card .card-body {
            padding: 1.5rem;
        }

        .game-card .btn-topup {
            background: linear-gradient(to right, var(--primary), var(--secondary));
            border: none;
            border-radius: 50px;
            padding: 0.5rem 1.5rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .game-card .btn-topup:hover {
            background: linear-gradient(to right, var(--secondary), var(--primary));
            transform: scale(1.05);
        }

        .section-title {
            position: relative;
            margin-bottom: 2.5rem;
            font-weight: 700;
            text-align: center;
        }

        .section-title:after {
            content: '';
            display: block;
            width: 60px;
            height: 4px;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            margin: 10px auto;
            border-radius: 2px;
        }

        .feature-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 1rem;
        }

        .features-section {
            background-color: white;
            padding: 4rem 0;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            margin: 3rem 0;
        }

        footer {
            background: var(--dark);
            color: white;
            padding: 2rem 0;
            margin-top: auto;
        }

        .social-icons a {
            color: white;
            font-size: 1.5rem;
            margin: 0 10px;
            transition: all 0.3s ease;
        }

        .social-icons a:hover {
            color: var(--secondary);
            transform: translateY(-3px);
        }

        .badge-popular {
            position: absolute;
            top: 10px;
            right: 10px;
            background: var(--accent);
            color: white;
            padding: 5px 15px;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 600;
            z-index: 10;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(253, 121, 168, 0.6);
            }

            70% {
                box-shadow: 0 0 0 10px rgba(253, 121, 168, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(253, 121, 168, 0);
            }
        }

        .search-container {
            max-width: 500px;
            margin: 0 auto 2rem;
        }

        .search-box {
            border-radius: 50px;
            padding: 0.75rem 1.5rem;
            border: 2px solid #e0e0e0;
            transition: all 0.3s ease;
        }

        .search-box:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.25rem rgba(108, 92, 231, 0.25);
        }

        .category-filter {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 2rem;
        }

        .category-btn {
            border-radius: 50px;
            padding: 0.5rem 1.5rem;
            background: white;
            border: 2px solid #e0e0e0;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .category-btn.active,
        .category-btn:hover {
            background: linear-gradient(to right, var(--primary), var(--secondary));
            color: white;
            border-color: transparent;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-gamepad me-2"></i>Toko Top Up
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Game</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Promo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Bantuan</a>
                    </li>
                    <!-- Tampilan sebelum login -->
                    <li class="nav-item">
                    <a href="{{ route('login.form') }}" class="nav-link">Masuk</a>
                    </li>
                    <li class="nav-item">
                    <a href="{{ route('register.form') }}" class="nav-link">Daftar</a>
                    </li>
                </ul>

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i> <span
                                class="d-none d-md-inline">Keranjang</span></a>
                    </li>

                    

                    
                </ul>
            </div>
        </div>
    </nav>

    <div class="hero-section">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-3">Top Up Game Favoritmu</h1>
            <p class="lead mb-4">Dapatkan diamond, koin, dan item game dengan proses cepat dan aman</p>
            <button class="btn btn-light btn-lg px-4 py-2 rounded-pill fw-bold">
                Jelajahi Sekarang <i class="fas fa-arrow-right ms-2"></i>
            </button>
        </div>
    </div>

    <div class="container mb-5">
        <h2 class="section-title">Pilih Game Favorit Anda</h2>

        <div class="search-container">
            <div class="input-group">
                <input type="text" class="form-control search-box" placeholder="Cari game...">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>

        <div class="category-filter">
            <button class="category-btn active">Semua</button>
            <button class="category-btn">Mobile</button>
            <button class="category-btn">PC</button>
            <button class="category-btn">Console</button>
            <button class="category-btn">Populer</button>
        </div>

        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="game-card">
                    <span class="badge-popular">Populer</span>
                    <img src="https://i.ibb.co/0QZcMq0/mlbb.jpg" class="card-img-top" alt="Mobile Legends">
                    <div class="card-body text-center">
                        <h5 class="card-title">Mobile Legends</h5>
                        <p class="text-muted">Mulai dari Rp 10.000</p>
                        <a href="#" class="btn btn-topup text-white">Top Up Sekarang</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="game-card">
                    <img src="https://i.ibb.co/6RJjL2H/ff.jpg" class="card-img-top" alt="Free Fire">
                    <div class="card-body text-center">
                        <h5 class="card-title">Free Fire</h5>
                        <p class="text-muted">Mulai dari Rp 5.000</p>
                        <a href="#" class="btn btn-topup text-white">Top Up Sekarang</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="game-card">
                    <span class="badge-popular">Populer</span>
                    <img src="https://i.ibb.co/6W0b6z0/pubg.jpg" class="card-img-top" alt="PUBG Mobile">
                    <div class="card-body text-center">
                        <h5 class="card-title">PUBG Mobile</h5>
                        <p class="text-muted">Mulai dari Rp 12.000</p>
                        <a href="#" class="btn btn-topup text-white">Top Up Sekarang</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="game-card">
                    <img src="https://i.ibb.co/0j7J3y0/valorant.jpg" class="card-img-top" alt="Valorant">
                    <div class="card-body text-center">
                        <h5 class="card-title">Valorant</h5>
                        <p class="text-muted">Mulai dari Rp 15.000</p>
                        <a href="#" class="btn btn-topup text-white">Top Up Sekarang</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="game-card">
                    <img src="https://i.ibb.co/6RJjL2H/genshin.jpg" class="card-img-top" alt="Genshin Impact">
                    <div class="card-body text-center">
                        <h5 class="card-title">Genshin Impact</h5>
                        <p class="text-muted">Mulai dari Rp 20.000</p>
                        <a href="#" class="btn btn-topup text-white">Top Up Sekarang</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="game-card">
                    <img src="https://i.ibb.co/0j7J3y0/cod.jpg" class="card-img-top" alt="Call of Duty">
                    <div class="card-body text-center">
                        <h5 class="card-title">Call of Duty Mobile</h5>
                        <p class="text-muted">Mulai dari Rp 8.000</p>
                        <a href="#" class="btn btn-topup text-white">Top Up Sekarang</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="game-card">
                    <span class="badge-popular">Populer</span>
                    <img src="https://i.ibb.co/0QZcMq0/apex.jpg" class="card-img-top" alt="Apex Legends">
                    <div class="card-body text-center">
                        <h5 class="card-title">Apex Legends</h5>
                        <p class="text-muted">Mulai dari Rp 15.000</p>
                        <a href="#" class="btn btn-topup text-white">Top Up Sekarang</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="game-card">
                    <img src="https://i.ibb.co/6W0b6z0/lol.jpg" class="card-img-top" alt="League of Legends">
                    <div class="card-body text-center">
                        <h5 class="card-title">League of Legends</h5>
                        <p class="text-muted">Mulai dari Rp 10.000</p>
                        <a href="#" class="btn btn-topup text-white">Top Up Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="features-section">
        <div class="container">
            <h2 class="section-title">Mengapa Memilih Kami?</h2>
            <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <div class="feature-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h4>Proses Cepat</h4>
                    <p class="text-muted">Top up diproses dalam hitungan detik, tidak perlu menunggu lama</p>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h4>Aman dan Terpercaya</h4>
                    <p class="text-muted">Transaksi aman dengan sistem pembayaran terenkripsi</p>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h4>Bantuan 24/7</h4>
                    <p class="text-muted">Customer service siap membantu kapan saja</p>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center">
        <div class="container">
            <div class="social-icons mb-3">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-discord"></i></a>
            </div>
            <p>&copy; 2023 Toko Top Up - Laravel 10. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Simple filter functionality for demonstration
        document.querySelectorAll('.category-btn').forEach(button => {
            button.addEventListener('click', function() {
                document.querySelectorAll('.category-btn').forEach(btn => {
                    btn.classList.remove('active');
                });
                this.classList.add('active');

                // In a real application, this would filter the games
                // For this demo, we'll just show a message
                const category = this.textContent;
                alert(`Menampilkan game dalam kategori: ${category}`);
            });
        });

        // Simulasi status login (bisa diubah sesuai kebutuhan)
        const isLoggedIn = true; // Ubah ke false untuk melihat tampilan sebelum login

        if (isLoggedIn) {
            document.getElementById('before-login').classList.add('d-none');
            document.getElementById('after-login').classList.remove('d-none');
        } else {
            document.getElementById('before-login').classList.remove('d-none');
            document.getElementById('after-login').classList.add('d-none');
        }
    </script>
</body>

</html>
