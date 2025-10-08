<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Transaction;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    public function dashboardAdmin()
    {
        $totalTransactions = Transaction::count();
        $totalRevenue = Transaction::where('status', 'completed')->sum('amount');
        $totalCustomers = Customer::count();
        $totalGames = Game::count();
        
        $recentTransactions = Transaction::with(['game', 'customer'])
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();
            
        return view('System.dashboard', compact(
            'totalTransactions', 
            'totalRevenue', 
            'totalCustomers', 
            'totalGames',
            'recentTransactions'
        ));
    }
}