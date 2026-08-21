<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocaliteController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');


Route::get('/', [HomeController::class, 'index'])->name('home');


Route::resource('localites', LocaliteController::class); // englobe tout (index,edit,show,...)