<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TopupController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', [TopupController::class, 'index2'])->name('topup.index');



Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [TopupController::class, 'index'])->name('dashboard');
    Route::get('/Riwayat Transaksi', [TopupController::class, 'Transaksi'])->name('Riwayat.Transaksi');
    Route::get('/games', [GameController::class, 'index'])->name('games.index');
    Route::resource('transactions', TransactionController::class);
    Route::resource('customers', CustomerController::class);
});


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboardAdmin', [DashboardController::class, 'dashboardAdmin'])->name('dashboardAdmin');
    Route::resource('games', GameController::class)->except(['index']);
});


