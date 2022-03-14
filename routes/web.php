<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\Backend\PageController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PageController as FrontendPageController;

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

Route::prefix('settings')->group(function () {
    Route::get('/', [SettingController::class, 'index'])->name('settings.index');
    Route::get('/create', [SettingController::class, 'create'])->name('settings.create');
    Route::post('/store', [SettingController::class, 'store'])->name('settings.store');
    Route::get('/edit/{settings}', [SettingController::class, 'edit'])->name('settings.edit');
    Route::post('/update/{settings}', [SettingController::class, 'update'])->name('settings.update');
    Route::get('/destroy/{settings}', [SettingController::class, 'destroy'])->name('settings.destroy');
});

Route::prefix('contact')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('contact.index');
    Route::get('/create', [ContactController::class, 'create'])->name('contact.create');
    Route::post('/store', [ContactController::class, 'store'])->name('contact.store');
    Route::get('/edit/{contact}', [ContactController::class, 'edit'])->name('contact.edit');
    Route::post('/update/{contact}', [ContactController::class, 'update'])->name('contact.update');
    Route::get('/destroy/{contact}', [ContactController::class, 'destroy'])->name('contact.destroy');
});




Route::get('/', [HomeController::class, 'index'])->name('frontend.index');

Route::get('/contact', [ContactController::class, 'index'])->name('frontend.contact');

Route::get('/blog/{slug:slug}', [FrontendPageController::class, 'detail'])->name('frontend.blog.detail');
