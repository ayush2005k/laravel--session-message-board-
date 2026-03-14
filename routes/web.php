<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [MessageController::class, 'index']);
Route::post('/submit', [MessageController::class, 'store'])->name('submit');