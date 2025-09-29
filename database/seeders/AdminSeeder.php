<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\User::create([
            'name'     => 'Administrator',
            'email'    => 'admin@gmail.com',
            'password' => bcrypt('rahasia'), // ganti dengan password kuat
            'role'     => 'admin',
        ]);
    }
}
