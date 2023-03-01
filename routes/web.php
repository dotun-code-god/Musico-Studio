<?php

use App\Http\Controllers\AudioUploadsController;
use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/booking-one', [BookingController::class, 'bookingOne'])->name('booking.one');
Route::post('/booking-one', [BookingController::class, 'bookingOneVerify']);

Route::get('/booking-two', [BookingController::class, 'bookingTwo']);
Route::post('/booking-two', [BookingController::class, 'bookingTwoVerify']);

Route::get('/booking-three', [BookingController::class, 'bookingThree']);
Route::post('/booking-three', [BookingController::class, 'bookingThreeVerify']);

Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');

Route::post('/tmp-upload', [AudioUploadsController::class, 'tmpUpload'])->name('tmp.upload');
Route::delete('/tmp-delete', [AudioUploadsController::class, 'tmpDelete'])->name('tmp.delete');
