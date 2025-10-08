<?php
// app/Models/Game.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'developer',
        'category',
        'topup_rate',
        'description',
        'logo',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'topup_rate' => 'decimal:2'
    ];

    // Accessor untuk URL logo
    public function getLogoUrlAttribute()
    {
        if ($this->logo) {
            return Storage::disk('public')->url($this->logo);
        }
        
        // Default image jika tidak ada logo
        return asset('images/default-game.png');
    }

    // Accessor untuk thumbnail
    public function getThumbnailUrlAttribute()
    {
        if ($this->logo) {
            return Storage::disk('public')->url($this->logo);
        }
        
        return asset('images/default-game-thumb.png');
    }

    // Scope untuk game aktif
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // Scope untuk game populer (contoh: berdasarkan transaksi)
    public function scopePopular($query)
    {
        return $query->where('is_active', true)
                    ->orderBy('created_at', 'desc')
                    ->limit(8);
    }
}