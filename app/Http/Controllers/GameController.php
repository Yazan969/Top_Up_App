<?php
// app/Http/Controllers/GameController.php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::latest()->paginate(10);
        return view('games.index', compact('games'));
    }

    public function create()
    {
        return view('games.create');
    }

public function store(Request $request)
{
    $validated = $request->validate([
        'name'        => 'required|unique:games',
        'developer'   => 'required',
        'category'    => 'required',
        'topup_rate'  => 'required|numeric',
        'description' => 'nullable',
        'logo'        => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    if ($request->hasFile('logo')) {
        // simpan path relatif: games/abc123.jpg
        $validated['logo'] = $request->file('logo')->store('games', 'public');
    }

    Game::create($validated);

    return redirect()->route('games.index')
                     ->with('success', 'Game berhasil ditambahkan.');
}

public function update(Request $request, Game $game)
{
    $validated = $request->validate([
        'name'        => 'required|string|max:255|unique:games,name,'.$game->id,
        'developer'   => 'required|string|max:255',
        'category'    => 'required|string',
        'topup_rate'  => 'required|numeric|min:0',
        'description' => 'nullable|string',
        'logo'        => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    if ($request->hasFile('logo')) {
        // Hapus file lama
        if ($game->logo) {
            Storage::disk('public')->delete($game->logo);
        }
        $validated['logo'] = $request->file('logo')->store('games', 'public');
    }

    $game->update($validated);

    return redirect()->route('games.index')
                     ->with('success', 'Game berhasil diperbarui!');
}

public function destroy(Game $game)
{
    // Opsional: hapus file logo saat menghapus record
    if ($game->logo) {
        Storage::disk('public')->delete($game->logo);
    }

    $game->delete();

    return redirect()->route('games.index')
                     ->with('success', 'Game berhasil dihapus.');
}

}