<?php

namespace App\Models;

use App\Models\City;
use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;



class Country extends BaseModel
{
    use HasFactory;

    public function cities(): HasMany
    {
        return $this->hasMany(City::class);
    }
}
