<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guests\TrainController;
use App\Http\Controllers\Guests\PageController;

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

Route::get('/', [TrainController::class, 'index'])->name('home');
Route::get('/trains', [PageController::class, 'index'])->name('trains');
Route::get('/trains/{trainId}', [PageController::class, 'show'])->name('train');
