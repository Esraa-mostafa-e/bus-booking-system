<?php

namespace App\Http\Resources\Front\Trip;

use Illuminate\Http\Request;
use App\Http\Resources\Front\City\CityResource;
use App\Http\Resources\Front\Trip\TripResource;
use Illuminate\Http\Resources\Json\JsonResource;

class TripStationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return 
        [
            'id'                       => $this->id,
            'city_From'                => CityResource::make($this->city_from),
            'City_to'                  => CityResource::make($this->city_to),
            'trip'                     => TripResource::make($this->trip),
            'available_seats'          => $this->available_seats,
            'trip_order'               => $this->trip_order,
            'price'                    => $this->price,
        ];
    }
}
