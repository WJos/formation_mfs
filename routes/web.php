<?php

use App\Http\Controllers\FirstController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/test', function () {
    return view('test');
})->name('test');


Route::get('/first', [FirstController::class, 'index'])->name('first');
