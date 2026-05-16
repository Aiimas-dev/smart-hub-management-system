<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\BookingController;



Route::post('/login', [AuthController::class, 'login']);


Route::middleware('auth:sanctum')->group(function () {

    // Equipment CRUD API
    Route::apiResource('equipments', EquipmentController::class);

    // Booking CRUD API
    Route::apiResource('bookings', BookingController::class);

    // Equipment Check-in API
    Route::post('/checkin/{id}', [EquipmentController::class, 'checkin']);

    // User Data API
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

});