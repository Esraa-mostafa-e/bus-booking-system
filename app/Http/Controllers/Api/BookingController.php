<?php

namespace App\Http\Controllers\Api;

use App\Models\Booking;
use App\Models\BusSeat;
use App\Enum\BookingStatus;
use App\Models\TripStation;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Front\Booking\BookingRequest;

class BookingController extends Controller
{
    public function bookTrip(BookingRequest $request)
    {
        $user=auth()->user();
        $tripStation=TripStation::find($request->trip_station_id);
        if($tripStation->available_seats==0){
            return $this->error('Sorry There is no Seats Available');
        }
        if($request->no_of_seats > $tripStation->available_seats ){
            return $this->error('there is only '.$tripStation->available_seats .'available');
        }
        $booking=new Booking;
        $booking->user_id=$user->id;
        $booking->trip_station_id =$request->trip_station_id;
        $booking->bus_id =$request->bus_id;
        $booking->no_of_seats =$request->no_of_seats;
        $booking->status=BookingStatus::PENDING->value;
        $booking->save();
        for($i=0;$i<$request->no_of_seats;$i++){
        $busSeat=BusSeat::where('bus_id',$request->bus_id)->where('is_available',true)->first();

           $booking->booking_seats()->create(['bus_seat_id'=>$busSeat->id]);
           $busSeat->is_available=false;
           $busSeat->save();
        }
        $tripStation->available_seats=$tripStation->available_seats-$request->no_of_seats;
        $tripStation->save();
        return $this->success();

    }
}
