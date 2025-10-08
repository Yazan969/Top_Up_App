<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'game_id',
        'transaction_id',
        'amount',
        'price',
        'status',
        'player_id',
        'server_id',
        'payment_method',
        'notes',
    ];

    protected $casts = [
        'amount' => 'integer',
        'price' => 'decimal:2',
    ];

    const STATUS_PENDING = 'pending';
    const STATUS_SUCCESS = 'success';
    const STATUS_FAILED = 'failed';
    const STATUS_PROCESSING = 'processing';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    public function getFormattedPriceAttribute()
    {
        return 'Rp ' . number_format($this->price, 0, ',', '.');
    }

    public function getFormattedAmountAttribute()
    {
        return number_format($this->amount, 0, ',', '.');
    }

    public function getStatusBadgeClassAttribute()
    {
        return [
            'pending' => 'status-pending',
            'success' => 'status-success',
            'failed' => 'status-failed',
            'processing' => 'status-pending',
        ][$this->status] ?? 'status-pending';
    }

    public function getStatusTextAttribute()
    {
        return [
            'pending' => 'Pending',
            'success' => 'Berhasil',
            'failed' => 'Gagal',
            'processing' => 'Diproses',
        ][$this->status] ?? 'Pending';
    }
}