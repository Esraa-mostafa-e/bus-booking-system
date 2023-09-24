<?php

namespace App\Models;

use App\Models\Booking;
use App\Models\BusSeat;
use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BookingSeat extends BaseModel
{
    use HasFactory;

    public function booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class);
    }
    public function bus_seat(): BelongsTo
    {
        return $this->belongsTo(BusSeat::class);
    }
}
