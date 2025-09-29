<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

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

    public function index4()
    {
        return view('topup.index4');
    }

        public function index() 
    {
        return view('topup.index3');
    }


}
