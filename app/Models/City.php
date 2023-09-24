<?php

namespace App\Models;

use App\Models\Country;
use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class City extends BaseModel
{
    use HasFactory;
    
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }
}
