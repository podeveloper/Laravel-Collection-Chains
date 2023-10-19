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
    $product = \App\Models\Product::with('subProducts')->first();
    $subProductsList = $product->subProducts
        ->map(fn($subProduct) => $subProduct->name)
        ->implode('<br>');

    return $subProductsList;
});
