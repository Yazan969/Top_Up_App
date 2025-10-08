<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Game;

class TopupController extends Controller
{
    public function index2()
    {
        $games = [
            ['id' => 1, 'name' => 'Mobile Legends', 'image' => 'mlbb.jpg'],
            ['id' => 2, 'name' => 'Free Fire', 'image' => 'ff.jpg'],
            ['id' => 3, 'name' => 'PUBG Mobile', 'image' => 'pubg.jpg'],
            ['id' => 4, 'name' => 'Valorant', 'image' => 'valorant.jpg'],
        ];

        return view('topup.index2', compact('games'));
    }

    public function Transaksi()
    {
        return view('topup.index3');
    }

        public function index() 
    {
        
        $games = Game::all();
        return view('topup.index4',  compact('games'));
    }

    public function profil() 
    {
        return view('topup.profil');
    }


}
