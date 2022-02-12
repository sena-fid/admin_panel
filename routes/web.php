<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\Backend\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::prefix('menu')->group(function () {
    Route::get('/', [MenuController::class, 'index'])->name('menu.index');
    Route::get('/create', [MenuController::class, 'create'])->name('menu.create');
    Route::post('/store', [MenuController::class, 'store'])->name('menu.store');
    Route::get('/edit/{menus}', [MenuController::class, 'edit'])->name('menu.edit');
    Route::post('/update/{menus}', [MenuController::class, 'update'])->name('menu.update');
    Route::get('/destroy/{menus}', [MenuController::class, 'destroy'])->name('menu.destroy');
});


Route::prefix('page')->group(function () {
    Route::get('/', [PageController::class, 'index'])->name('page.index');
    Route::get('/create', [PageController::class, 'create'])->name('page.create');
    Route::post('/store', [PageController::class, 'store'])->name('page.store');
    Route::get('/edit/{page}', [PageController::class, 'edit'])->name('page.edit');
    Route::post('/update/{page}', [PageController::class, 'update'])->name('page.update');
    Route::get('/destroy/{page}', [PageController::class, 'destroy'])->name('page.destroy');
});
