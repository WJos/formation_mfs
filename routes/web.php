<?php

use App\Http\Controllers\ProduitController;
use App\Http\Controllers\LocaliteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PaysController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\CommuneController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvinceController;


Route::middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    require __DIR__ . '/users.php';
    Route::resource('pays', PaysController::class);
    Route::resource('regions', RegionController::class);
    Route::resource('provinces', ProvinceController::class);
    Route::resource('communes', CommuneController::class);
    Route::resource('localites', LocaliteController::class); // englobe tout (index,edit,show,...)
    Route::resource('produits', ProduitController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';