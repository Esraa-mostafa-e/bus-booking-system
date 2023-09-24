<?php

namespace App\Http\Controllers\Api;

use App\Models\TripStation;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\Front\Trip\TripStationResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class TripController extends Controller
{
     /**
     * @return AnonymousResourceCollection
     */
    public function availableTrips():AnonymousResourceCollection
    {
        $availableTrips=TripStation::where('available_seats','!=',0)->get();
        return TripStationResource::collection($availableTrips);

    }
}
