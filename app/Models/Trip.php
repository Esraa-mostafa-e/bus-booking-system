<?php

namespace App\Models;

use App\Models\Bus;
use App\Models\BaseModel;
use App\Models\TripStation;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Trip extends BaseModel
{
    use HasFactory;
    
    public function trip_stations(): HasMany
    {
        return $this->hasMany(TripStation::class);
    }
    public function bus():HasOne
    {
        return $this->hasOne(Bus::class);
    }
}
