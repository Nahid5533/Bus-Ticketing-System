<?php

use App\Http\Controllers\TripController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\UserController;


Route::get('/trips/create', [TripController::class, 'create'])->name('trips.create');


Route::post('/trips/store', [TripController::class, 'store'])->name('trips.store');


Route::get('/bookings/create', [BookingController::class, 'create'])->name('bookings.create');


Route::post('/bookings/store', [BookingController::class, 'store'])->name('bookings.store');


Route::get('/users/register-login', function () {
    return view('register_login');
})->name('users.register_login');


Auth::routes();