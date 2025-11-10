<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\BookingController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/view/packages', [PackageController::class, 'view']);
Route::get('/view/bookings', [BookingController::class, 'view']);
