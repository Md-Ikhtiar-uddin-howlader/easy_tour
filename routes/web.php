<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SuccessfulController;
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
    return view('master');
});

// Route::get('home', function () {
//     return view('home');
// });

Route::get('/home', [HomeController::class, 'index']);
Route::get('/destination', [DestinationController::class, 'index']);
Route::get('/booking', [BookingController::class, 'index']);
Route::get('/payment', [PaymentController::class, 'index']);
Route::get('/successful', [SuccessfulController::class, 'index']);

Route::resource('/booking', BookingController::class);

// Route::get('/destination', function () {
//     return view('destination');
// });


