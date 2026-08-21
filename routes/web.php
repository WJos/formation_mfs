<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CommuneController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    require __DIR__ . '/users.php';
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('communes', CommuneController::class);