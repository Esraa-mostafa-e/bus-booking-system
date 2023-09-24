<?php

namespace App\Http\Requests\Front\Booking;

use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
{
   

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'trip_station_id'=>['required','exists:trip_stations,id'],
            'bus_id'=>['required','exists:buses,id'],
            'no_of_seats'=>['required','integer'],

        ];
    }
}
