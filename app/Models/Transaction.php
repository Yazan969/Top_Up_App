<?php
// app/Models/Transaction.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_code',
        'game_id',
        'customer_id',
        'amount',
        'item',
        'quantity',
        'status',
        'notes'
    ];

    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}