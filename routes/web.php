<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\FibonacciController;
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
    return view('welcome');
});

Route::resource('events', EventController::class)->only(['store', 'index']);
Route::resource('fibonacci', FibonacciController::class)->only(['store', 'index']);

