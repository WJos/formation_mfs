<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvinceController;


Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('provinces', ProvinceController::class);
