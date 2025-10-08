<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
        'phone',
        'birth_date',
        'address',
        'avatar',
        'is_admin',
        'email_verified_at',
        'preferences',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'birth_date' => 'date',
        'is_admin' => 'boolean',
        'preferences' => 'array',
    ];

    // Relationships
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    // Accessors
    public function getAvatarUrlAttribute()
    {
        if ($this->avatar) {
            return asset('storage/' . $this->avatar);
        }
        return asset('images/pp.jpg');
    }

    public function getMemberSinceAttribute()
    {
        return $this->created_at->format('M Y');
    }

    public function getMembershipDurationAttribute()
    {
        $months = $this->created_at->diffInMonths(now());
        if ($months < 12) {
            return $months . ' bulan';
        } else {
            $years = floor($months / 12);
            $remainingMonths = $months % 12;
            return $years . ' tahun' . ($remainingMonths > 0 ? ' ' . $remainingMonths . ' bulan' : '');
        }
    }

    public function getTotalTransactionsAttribute()
    {
        return $this->transactions()->count();
    }

    public function getSuccessfulTransactionsAttribute()
    {
        return $this->transactions()->where('status', 'success')->count();
    }

    public function getTotalSpentAttribute()
    {
        return $this->transactions()->where('status', 'success')->sum('price');
    }

    public function getAccountLevelAttribute()
    {
        $totalSpent = $this->total_spent;
        
        if ($totalSpent > 10000000) return 'Diamond';
        if ($totalSpent > 5000000) return 'Platinum';
        if ($totalSpent > 1000000) return 'Gold';
        return 'Silver';
    }

    // Preferences helpers
    public function getPreference($key, $default = null)
    {
        return $this->preferences[$key] ?? $default;
    }

    public function setPreference($key, $value)
    {
        $preferences = $this->preferences ?? [];
        $preferences[$key] = $value;
        $this->preferences = $preferences;
    }
}