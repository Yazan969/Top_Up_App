<?php
// app/Http/Controllers/GameController.php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::all();
        return view('games.index', compact('games'));
    }

    public function create()
    {
        return view('games.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'developer' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'topup_rate' => 'required|numeric|min:0.1',
            'description' => 'nullable|string',
        ]);

        Game::create($request->all());

        return redirect()->route('games.index')
            ->with('success', 'Game berhasil ditambahkan.');
    }

    public function show(Game $game)
    {
        return view('games.show', compact('game'));
    }

    public function edit(Game $game)
    {
        return view('games.edit', compact('game'));
    }

    public function update(Request $request, Game $game)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'developer' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'topup_rate' => 'required|numeric|min:0.1',
            'description' => 'nullable|string',
        ]);

        $game->update($request->all());

        return redirect()->route('games.index')
            ->with('success', 'Game berhasil diperbarui.');
    }

    public function destroy(Game $game)
    {
        $game->delete();

        return redirect()->route('games.index')
            ->with('success', 'Game berhasil dihapus.');
    }
}