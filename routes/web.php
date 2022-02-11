<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\MenuController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::prefix('menu')->group(function () {
    Route::get('/', [MenuController::class, 'index'])->name('menu.index');
    Route::get('/create', [MenuController::class, 'create'])->name('menu.create');
    Route::post('/store', [MenuController::class, 'store'])->name('menu.store');
    Route::get('/edit/{menu}', [MenuController::class, 'edit'])->name('menu.edit');
    Route::post('/update/{menu}', [MenuController::class, 'update'])->name('menu.update');
    Route::get('/destroy/{menu}', [MenuController::class, 'destroy'])->name('menu.destroy');
    Route::get('/status/{menu}', [MenuController::class, 'status'])->name('menu.status');
    Route::get('/images/{menu}', [MenuController::class, 'images'])->name('menu.images');
});

