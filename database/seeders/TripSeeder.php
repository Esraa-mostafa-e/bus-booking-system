<?php

namespace Database\Seeders;

use App\Models\Bus;
use App\Models\City;
use App\Models\Trip;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trip=Trip::create([
            'title'=>'Cairo-Asyut',
            'description'=>'From Cairo To Asyut Trip',
            'code'=>'CA1'
        ]);
        $trip->trip_stations()->create([
            'title'=>'Cairo-AlFayyum',
            'from_city_id'=>City::where('name','Cairo')->first()->id,
            'to_city_id'=>City::where('name','AlFayyum')->first()->id,
            'trip_order'=>1,
            'price'=>100,
            'available_seats'=>12
        ],
    [
           'title'=>'AlFayyum-AlMinya',
            'from_city_id'=>City::where('name','AlFayyum')->first()->id,
            'to_city_id'=>City::where('name','AlMinya')->first()->id,
            'trip_order'=>2,
            'price'=>100,
            'available_seats'=>12

    ],
    [
         'title'=>'AlMinya-Asyut',
          'from_city_id'=>City::where('name','AlMinya')->first()->id,
          'to_city_id'=>City::where('name','Asyut')->first()->id,
          'trip_order'=>3,
          'price'=>100,
          'available_seats'=>12

    ]
    );
    $bus=$trip->bus()->create([
        'code'=>'CA',
        'no_of_seats'=>12

    ]);
    for($i=0;$i<12;$i++){
        $bus->bus_seats()->create([
            'seat_number'=>rand(0,99),
            'is_available'=>true

        ]);
    }
        
    }
}
