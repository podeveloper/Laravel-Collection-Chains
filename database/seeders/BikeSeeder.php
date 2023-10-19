<?php

namespace Database\Seeders;

use App\Models\Bike;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bikes = [
            'Suzuki',
            'Kawasaki',
            'KTM',
            'Bajaj',
            'Honda',
            'Ducati',
            'Aprilia',
            'Yamaha',
            'Harley Davidson',
            'Benelli',
            'Piaggio',
            'Cagiva',
            'Moto Guzzi',
            'Hero',
            'TVS',
            'Royal',
        ];

        foreach ($bikes as $bikeName)
        {
            Bike::create(['name' => $bikeName]);
        }
    }
}
