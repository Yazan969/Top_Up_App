<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Toko Top Up</title>
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

        .dashboard-container {
            padding: 2rem 0;
            flex: 1;
        }

        .dashboard-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            transition: all 0.3s ease;
        }

        .dashboard-card:hover {
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
            transform: translateY(-5px);
        }

        .dashboard-header {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 2rem;
            border-radius: 15px;
            margin-bottom: 2rem;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .dashboard-titlee {
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .user-avatar-large {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid rgba(255, 255, 255, 0.5);
        }

        .stat-card {
            text-align: center;
            padding: 1.5rem;
            border-radius: 10px;
            background: white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .stat-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: var(--primary);
        }

        .stat-number {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            color: #6c757d;
            font-weight: 500;
        }

        .transaction-table {
            width: 100%;
            border-collapse: collapse;
        }

        .transaction-table th {
            background-color: #f8f9fa;
            padding: 1rem;
            text-align: left;
            font-weight: 600;
            border-bottom: 2px solid #e9ecef;
        }

        .transaction-table td {
            padding: 1rem;
            border-bottom: 1px solid #e9ecef;
        }

        .transaction-table tr:last-child td {
            border-bottom: none;
        }

        .status-badge {
            padding: 0.25rem 0.75rem;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .status-success {
            background-color: rgba(0, 184, 148, 0.1);
            color: var(--success);
        }

        .status-pending {
            background-color: rgba(253, 121, 168, 0.1);
            color: var(--accent);
        }

        .status-failed {
            background-color: rgba(214, 48, 49, 0.1);
            color: #d63031;
        }

        .btn-primary-custom {
            background: linear-gradient(to right, var(--primary), var(--secondary));
            border: none;
            border-radius: 50px;
            padding: 0.5rem 1.5rem;
            font-weight: 500;
            transition: all 0.3s ease;
            color: white;
        }

        .btn-primary-custom:hover {
            background: linear-gradient(to right, var(--secondary), var(--primary));
            transform: scale(1.05);
            color: white;
        }

        .section-title {
            position: relative;
            margin-bottom: 1.5rem;
            font-weight: 700;
        }

        .section-title:after {
            content: '';
            display: block;
            width: 60px;
            height: 4px;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            margin-top: 10px;
            border-radius: 2px;
        }

        .recent-activity {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .recent-activity li {
            padding: 1rem 0;
            border-bottom: 1px solid #e9ecef;
            display: flex;
            align-items: center;
        }

        .recent-activity li:last-child {
            border-bottom: none;
        }

        .activity-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            background: rgba(108, 92, 231, 0.1);
            color: var(--primary);
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

        @media (max-width: 768px) {
            .dashboard-header {
                text-align: center;
            }
            
            .stat-card {
                margin-bottom: 1rem;
            }
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
                        <a class="nav-link" href="{{route('beranda')}}">Beranda</a>
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
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('dashboard')}}">Dashboard</a>
                    </li>
                </ul>

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i> <span
                                class="d-none d-md-inline">Keranjang</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                            <img src="{{ asset('images/pp.jpg') }}" class="user-avatar me-2" alt="User Avatar">
                            <span class="d-none d-md-inline">{{ auth()->user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="dashboard.html"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i>Profil Saya</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-history me-2"></i>Riwayat Transaksi</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{route('logout')}}"><i class="fas fa-sign-out-alt me-2"></i>Keluar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="dashboard-container">
        <div class="container">
            <div class="dashboard-header">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h1 class="dashboard-titlee">Selamat Datang, {{ auth()->user()->name }}!</h1>
                        <p class="mb-0">Kelola akun dan transaksi top up game Anda di sini  </p>
                    </div>
                    <div class="col-md-4 text-md-end">
                        <img src="{{ asset('images/pp.jpg') }}" class="user-avatar-large" alt="User Avatar">
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <div class="stat-number">15</div>
                        <div class="stat-label">Total Transaksi</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="stat-number">12</div>
                        <div class="stat-label">Transaksi Berhasil</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="stat-number">2</div>
                        <div class="stat-label">Transaksi Pending</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-wallet"></i>
                        </div>
                        <div class="stat-number">Rp 450.000</div>
                        <div class="stat-label">Total Pengeluaran</div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="dashboard-card">
                        <h3 class="section-title">Riwayat Transaksi Terbaru</h3>
                        <div class="table-responsive">
                            <table class="transaction-table">
                                <thead>
                                    <tr>
                                        <th>ID Transaksi</th>
                                        <th>Game</th>
                                        <th>Tanggal</th>
                                        <th>Jumlah</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#TX001234</td>
                                        <td>Mobile Legends</td>
                                        <td>15 Nov 2023</td>
                                        <td>Rp 50.000</td>
                                        <td><span class="status-badge status-success">Berhasil</span></td>
                                    </tr>
                                    <tr>
                                        <td>#TX001233</td>
                                        <td>Free Fire</td>
                                        <td>14 Nov 2023</td>
                                        <td>Rp 25.000</td>
                                        <td><span class="status-badge status-success">Berhasil</span></td>
                                    </tr>
                                    <tr>
                                        <td>#TX001232</td>
                                        <td>PUBG Mobile</td>
                                        <td>12 Nov 2023</td>
                                        <td>Rp 75.000</td>
                                        <td><span class="status-badge status-pending">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>#TX001231</td>
                                        <td>Valorant</td>
                                        <td>10 Nov 2023</td>
                                        <td>Rp 100.000</td>
                                        <td><span class="status-badge status-success">Berhasil</span></td>
                                    </tr>
                                    <tr>
                                        <td>#TX001230</td>
                                        <td>Genshin Impact</td>
                                        <td>8 Nov 2023</td>
                                        <td>Rp 150.000</td>
                                        <td><span class="status-badge status-failed">Gagal</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center mt-3">
                            <a href="#" class="btn btn-primary-custom">Lihat Semua Transaksi</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="dashboard-card">
                        <h3 class="section-title">Aktivitas Terbaru</h3>
                        <ul class="recent-activity">
                            <li>
                                <div class="activity-icon">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                                <div>
                                    <div class="fw-bold">Top Up Mobile Legends</div>
                                    <small class="text-muted">15 Nov 2023, 14:30</small>
                                </div>
                            </li>
                            <li>
                                <div class="activity-icon">
                                    <i class="fas fa-user-edit"></i>
                                </div>
                                <div>
                                    <div class="fw-bold">Perbarui Profil</div>
                                    <small class="text-muted">14 Nov 2023, 10:15</small>
                                </div>
                            </li>
                            <li>
                                <div class="activity-icon">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                                <div>
                                    <div class="fw-bold">Top Up Free Fire</div>
                                    <small class="text-muted">14 Nov 2023, 09:45</small>
                                </div>
                            </li>
                            <li>
                                <div class="activity-icon">
                                    <i class="fas fa-key"></i>
                                </div>
                                <div>
                                    <div class="fw-bold">Ganti Password</div>
                                    <small class="text-muted">12 Nov 2023, 16:20</small>
                                </div>
                            </li>
                            <li>
                                <div class="activity-icon">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                                <div>
                                    <div class="fw-bold">Top Up PUBG Mobile</div>
                                    <small class="text-muted">12 Nov 2023, 11:30</small>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="dashboard-card">
                        <h3 class="section-title">Game Favorit</h3>
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://i.ibb.co/0QZcMq0/mlbb.jpg" class="rounded me-3" width="50" height="50" alt="Mobile Legends">
                            <div>
                                <div class="fw-bold">Mobile Legends</div>
                                <small class="text-muted">5x transaksi</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://i.ibb.co/6RJjL2H/ff.jpg" class="rounded me-3" width="50" height="50" alt="Free Fire">
                            <div>
                                <div class="fw-bold">Free Fire</div>
                                <small class="text-muted">3x transaksi</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <img src="https://i.ibb.co/6W0b6z0/pubg.jpg" class="rounded me-3" width="50" height="50" alt="PUBG Mobile">
                            <div>
                                <div class="fw-bold">PUBG Mobile</div>
                                <small class="text-muted">2x transaksi</small>
                            </div>
                        </div>
                    </div>
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
        // Fungsi untuk menampilkan notifikasi
        function showNotification(message, type = 'info') {
            // Di sini bisa ditambahkan kode untuk menampilkan notifikasi
            console.log(`${type.toUpperCase()}: ${message}`);
        }

        // Event listener untuk tombol logout
        document.querySelector('.dropdown-item[href="#"]').addEventListener('click', function(e) {
            e.preventDefault();
            if (confirm('Apakah Anda yakin ingin keluar?')) {
                showNotification('Anda telah berhasil keluar', 'success');
                // Redirect ke halaman login
                window.location.href = 'index.html';
            }
        });

        // Simulasi data pengguna (dalam aplikasi nyata, data ini akan diambil dari backend)
        const userData = {
            name: 'John Doe',
            email: 'johndoe@example.com',
            joinDate: '15 Oktober 2023',
            avatar: 'https://i.pravatar.cc/150?img=12'
        };

        // Update informasi pengguna di halaman
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('.dashboard-title').textContent = `Selamat Datang, ${userData.name}!`;
            document.querySelector('.user-avatar-large').src = userData.avatar;
            document.querySelector('.user-avatar').src = userData.avatar;
        });
    </script>
</body>

</html>
