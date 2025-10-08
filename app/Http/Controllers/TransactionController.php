<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaction;
use App\Models\Game;

class TransactionController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $transactions = Transaction::with('game')
            ->where('user_id', $user->id)
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        $stats = [
            'total' => $user->transactions()->count(),
            'success' => $user->transactions()->where('status', 'success')->count(),
            'pending' => $user->transactions()->where('status', 'pending')->count(),
            'total_spent' => $user->transactions()->where('status', 'success')->sum('price'),
        ];

        return view('transactions', compact('transactions', 'stats'));
    }

    public function show($id)
    {
        $transaction = Transaction::with(['game', 'user'])
            ->where('user_id', Auth::id())
            ->findOrFail($id);

        return view('transaction-detail', compact('transaction'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'game_id' => 'required|exists:games,id',
            'amount' => 'required|integer|min:1',
            'player_id' => 'required|string',
            'server_id' => 'nullable|string',
            'payment_method' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $game = Game::findOrFail($request->game_id);
        $price = $game->topup_rate * $request->amount;

        $transaction = Transaction::create([
            'user_id' => Auth::id(),
            'game_id' => $request->game_id,
            'transaction_id' => 'TX' . time() . rand(1000, 9999),
            'amount' => $request->amount,
            'price' => $price,
            'status' => Transaction::STATUS_PENDING,
            'player_id' => $request->player_id,
            'server_id' => $request->server_id,
            'payment_method' => $request->payment_method,
            'notes' => $request->notes,
        ]);

        // Process payment (integrate with payment gateway here)
        $this->processPayment($transaction);

        return redirect()->route('transactions.show', $transaction->id)
            ->with('success', 'Transaksi berhasil dibuat! Silakan selesaikan pembayaran.');
    }

    private function processPayment(Transaction $transaction)
    {
        // Simulate payment processing
        // In real application, integrate with payment gateway like Midtrans, Xendit, etc.
        
        // For demo purposes, automatically mark as success after 5 seconds
        // In production, this would be handled by payment gateway webhook
        if (app()->environment('local')) {
            \Illuminate\Support\Facades\Artisan::call('transactions:process', [
                'transaction_id' => $transaction->id
            ]);
        }
    }

    public function getUserTransactions($userId)
    {
        $transactions = Transaction::with('game')
            ->where('user_id', $userId)
            ->orderBy('created_at', 'desc')
            ->get();

        return response()->json($transactions);
    }
}