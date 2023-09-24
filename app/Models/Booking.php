<?php

namespace App\Models;

use App\Models\User;
use App\Models\BaseModel;
use App\Enum\BookingStatus;
use App\Models\BookingSeat;
use App\Models\TripStation;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends BaseModel
{
    use HasFactory;
    protected $casts = [
        'status'          => BookingStatus::class,
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function trip_station(): BelongsTo
    {
        return $this->belongsTo(TripStation::class);
    }
    public function booking_seats(): HasMany
    {
        return $this->hasMany(BookingSeat::class);
    }
}
