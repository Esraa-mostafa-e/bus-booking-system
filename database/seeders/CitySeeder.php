<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $country=Country::first();
        $cities = [
            [
                'name' => 'Cairo',
                'country_id'     => $country->id,
            ],
            [
                'name' => 'Giza',
                'country_id'     => $country->id,
            ],
            [
                'name' => 'AlFayyum',
                'country_id'     => $country->id,
            ],
            [
                'name' => 'AlMinya',
                'country_id'     => $country->id,
            ],
            [
                'name' => 'Asyut',
                'country_id'     => $country->id,
            ]
        ];
        foreach ($cities as $data) {
            /** @var City $city */
             City::create([
                'name' => $data['name'],
                'country_id' => $data['country_id'],
            ]);
         
        }
    }
}
