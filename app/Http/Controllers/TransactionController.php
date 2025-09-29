<?php
// app/Http/Controllers/TransactionController.php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Game;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with(['game', 'customer'])->latest()->get();
        return view('transactions.index', compact('transactions'));
    }

    public function create()
    {
        $games = Game::where('is_active', true)->get();
        $customers = Customer::all();
        return view('transactions.create', compact('games', 'customers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'game_id' => 'required|exists:games,id',
            'customer_id' => 'required|exists:customers,id',
            'amount' => 'required|numeric|min:0',
            'item' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'notes' => 'nullable|string',
        ]);

        $transaction = Transaction::create([
            'transaction_code' => 'TRX-' . time(),
            'game_id' => $request->game_id,
            'customer_id' => $request->customer_id,
            'amount' => $request->amount,
            'item' => $request->item,
            'quantity' => $request->quantity,
            'status' => 'pending',
            'notes' => $request->notes,
        ]);

        return redirect()->route('transactions.index')
            ->with('success', 'Transaksi berhasil dibuat.');
    }

    public function show(Transaction $transaction)
    {
        $transaction->load(['game', 'customer']);
        return view('transactions.show', compact('transaction'));
    }

    public function edit(Transaction $transaction)
    {
        $games = Game::where('is_active', true)->get();
        $customers = Customer::all();
        return view('transactions.edit', compact('transaction', 'games', 'customers'));
    }

    public function update(Request $request, Transaction $transaction)
    {
        $request->validate([
            'game_id' => 'required|exists:games,id',
            'customer_id' => 'required|exists:customers,id',
            'amount' => 'required|numeric|min:0',
            'item' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'status' => 'required|in:pending,processing,completed,failed',
            'notes' => 'nullable|string',
        ]);

        $transaction->update($request->all());

        return redirect()->route('transactions.index')
            ->with('success', 'Transaksi berhasil diperbarui.');
    }

    public function destroy(Transaction $transaction)
    {
        $transaction->delete();

        return redirect()->route('transactions.index')
            ->with('success', 'Transaksi berhasil dihapus.');
    }

    public function updateStatus(Request $request, Transaction $transaction)
    {
        $request->validate([
            'status' => 'required|in:pending,processing,completed,failed'
        ]);

        $transaction->update(['status' => $request->status]);

        return response()->json(['success' => 'Status berhasil diperbarui.']);
    }
}