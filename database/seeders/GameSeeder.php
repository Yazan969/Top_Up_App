<?php
// database/seeders/GameSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Game;

class GameSeeder extends Seeder
{
    public function run()
    {
        $games = [
            [
                'name' => 'Mobile Legends',
                'developer' => 'Moonton',
                'category' => 'MOBA',
                'topup_rate' => 1.0,
                'is_active' => true,
                'description' => 'Game MOBA populer dari Moonton'
            ],
            [
                'name' => 'PUBG Mobile',
                'developer' => 'Tencent Games',
                'category' => 'Battle Royale',
                'topup_rate' => 0.95,
                'is_active' => true,
                'description' => 'Game battle royale yang seru'
            ],
            // Tambahkan game lainnya
        ];

        foreach ($games as $game) {
            Game::create($game);
        }
    }
}