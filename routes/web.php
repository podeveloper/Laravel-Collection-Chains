<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $pricesOfBikes = [
      'Suzuki' => 10000,
      'Kawasaki' => 20000,
      'KTM' => 15000,
      'Bajaj' => 7000,
      'Honda' => 300,
      'Ducati' => 200000,
      'Aprilia' => 150,
      'Yamaha' => 250,
      'Harley Davidson' => 900,
      'Benelli' => 80,
      'Piaggio' => 400,
      'Cagiva' => 850,
      'Moto Guzzi' => 540,
      'Hero' => 210,
      'TVS' => 780,
      'Royal' => 870,
    ];

    $randomBikes = \App\Models\Bike::all()->random(3);
    $maxValue = $randomBikes->map(function ($item) use ($pricesOfBikes){
        return $pricesOfBikes[$item->name];
    })->max();

    return dd($randomBikes->pluck('name'),$maxValue);
});
