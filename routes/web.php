<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AbsenceController;
use App\Http\Controllers\OfpiController;
use App\Http\Controllers\HciController;

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

Route::get('/', [WelcomeController::class, 'index']);

Route::group(['prefix' => 'absences'], function () {
    Route::get('/', [AbsenceController::class, 'index']);
    Route::get('/generator', [AbsenceController::class, 'generator']);
    Route::get('/finder', [AbsenceController::class, 'finder']);
});

Route::group(['prefix' => 'ofpi'], function () {
    Route::get('/', [OfpiController::class, 'index']);
});

Route::group(['prefix' => 'hci'], function () {
    Route::get('/', [HciController::class, 'index']);
});