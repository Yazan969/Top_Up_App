<?php
// app/Models/Game.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'developer',
        'description',
        'category',
        'topup_rate',
        'is_active',
        'logo'
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}