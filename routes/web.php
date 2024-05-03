<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\GameController;
use App\Http\Controllers\HomeController;

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



Route::get('games', [HomeController::class, 'index'])->name('games');


Route::prefix('games')->group(function () {
    Route::get('{game}', [GameController::class, 'index'])->name('game');
});

Route::get('search', [GameController::class, 'findGame'])->name('search');
Route::get('genre', [GameController::class, 'filterGame'])->name('genre');


