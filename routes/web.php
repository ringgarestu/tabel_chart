<?php

use App\Http\Controllers\chart_controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tanki_air;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('home', [tanki_air::class, 'index']);
Route::get('chart', [chart_controller::class, 'index']);
// Route::get('rumah', [tanki_air::class, 'index']);
// Route::get('delete/{id}', [tanki_air::class, 'delete']);