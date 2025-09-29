<!-- resources/views/dashboard.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">

        <!-- Main content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group me-2">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Hari ini</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Minggu ini</button>
                    </div>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="row">
                <div class="col-md-3">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="me-3">
                                    <h5 class="card-title">Total Transaksi</h5>
                                    <h2 class="card-text">1,248</h2>
                                </div>
                                <div class="align-self-center">
                                    <i class="fas fa-shopping-cart fa-2x"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">Lihat detail</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="me-3">
                                    <h5 class="card-title">Pendapatan</h5>
                                    <h2 class="card-text">Rp 12.8Jt</h2>
                                </div>
                                <div class="align-self-center">
                                    <i class="fas fa-dollar-sign fa-2x"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">Lihat detail</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="me-3">
                                    <h5 class="card-title">Pelanggan</h5>
                                    <h2 class="card-text">892</h2>
                                </div>
                                <div class="align-self-center">
                                    <i class="fas fa-user fa-2x"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">Lihat detail</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-info text-white mb-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="me-3">
                                    <h5 class="card-title">Game Tersedia</h5>
                                    <h2 class="card-text">15</h2>
                                </div>
                                <div class="align-self-center">
                                    <i class="fas fa-gamepad fa-2x"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">Lihat detail</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Charts and Recent Transactions -->
            <div class="row">
                <div class="col-md-8">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="card-title">Pendapatan Bulanan</h5>
                        </div>
                        <div class="card-body">
                            <canvas id="revenueChart" width="100%" height="40"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="card-title">Game Populer</h5>
                        </div>
                        <div class="card-body">
                            <canvas id="gameChart" width="100%" height="40"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Transactions -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title">Transaksi Terbaru</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Game</th>
                                    <th scope="col">Item</th>
                                    <th scope="col">Pelanggan</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#TRX-1289</td>
                                    <td>Mobile Legends</td>
                                    <td>100 Diamonds</td>
                                    <td>john_doe</td>
                                    <td>Rp 25,000</td>
                                    <td><span class="badge bg-success">Selesai</span></td>
                                    <td>10 Nov 2023</td>
                                </tr>
                                <tr>
                                    <td>#TRX-1288</td>
                                    <td>PUBG Mobile</td>
                                    <td>600 UC</td>
                                    <td>gamer123</td>
                                    <td>Rp 80,000</td>
                                    <td><span class="badge bg-success">Selesai</span></td>
                                    <td>10 Nov 2023</td>
                                </tr>
                                <tr>
                                    <td>#TRX-1287</td>
                                    <td>Genshin Impact</td>
                                    <td>300 Genesis Crystals</td>
                                    <td>anime_lover</td>
                                    <td>Rp 75,000</td>
                                    <td><span class="badge bg-warning">Pending</span></td>
                                    <td>9 Nov 2023</td>
                                </tr>
                                <tr>
                                    <td>#TRX-1286</td>
                                    <td>Free Fire</td>
                                    <td>100 Diamonds</td>
                                    <td>ff_pro</td>
                                    <td>Rp 15,000</td>
                                    <td><span class="badge bg-success">Selesai</span></td>
                                    <td>9 Nov 2023</td>
                                </tr>
                                <tr>
                                    <td>#TRX-1285</td>
                                    <td>Valorant</td>
                                    <td>1000 Points</td>
                                    <td>valorant_gamer</td>
                                    <td>Rp 120,000</td>
                                    <td><span class="badge bg-danger">Gagal</span></td>
                                    <td>8 Nov 2023</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // Revenue Chart
    var ctx = document.getElementById('revenueChart').getContext('2d');
    var revenueChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
            datasets: [{
                label: 'Pendapatan (Juta Rupiah)',
                data: [8, 9.5, 7.8, 10.2, 9.1, 11.5, 12.8, 10.9, 11.2, 12.5, 13.2, 14.1],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 2,
                tension: 0.3
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Game Popularity Chart
    var gameCtx = document.getElementById('gameChart').getContext('2d');
    var gameChart = new Chart(gameCtx, {
        type: 'doughnut',
        data: {
            labels: ['Mobile Legends', 'PUBG Mobile', 'Free Fire', 'Genshin Impact', 'Valorant'],
            datasets: [{
                data: [35, 25, 20, 15, 5],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.7)',
                    'rgba(54, 162, 235, 0.7)',
                    'rgba(255, 206, 86, 0.7)',
                    'rgba(75, 192, 192, 0.7)',
                    'rgba(153, 102, 255, 0.7)'
                ],
                borderWidth: 1
            }]
        }
    });
</script>
@endsection