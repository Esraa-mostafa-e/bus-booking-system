<?php

namespace App\Models;

use App\Models\Trip;
use App\Models\BusSeat;
use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;




class Bus extends BaseModel
{
    use HasFactory;

    public function trip(): BelongsTo
    {
        return $this->belongsTo(Trip::class);
    }
    public function bus_seats(): HasMany
    {
        return $this->hasMany(BusSeat::class);
    }
}
