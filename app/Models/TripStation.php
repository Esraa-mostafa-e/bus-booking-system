<?php

namespace App\Models;

use App\Models\City;
use App\Models\Trip;
use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class TripStation extends BaseModel
{
    use HasFactory;

    public function trip(): BelongsTo
    {
        return $this->belongsTo(Trip::class);
    }
    public function city_from(): BelongsTo
    {
        return $this->belongsTo(City::class,'from_city_id');
    }
    public function city_to(): BelongsTo
    {
        return $this->belongsTo(City::class,'to_city_id');
    }
}
