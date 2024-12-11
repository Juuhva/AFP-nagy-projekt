<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

route::get('/', [HomeController::class, 'home']);

Route::get('/', function () {
    return view('home.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');    
});

require __DIR__.'/auth.php';

route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'admin']);

route::get('view_book', [AdminController::class, 'view_book'])->middleware(['auth', 'admin']);
route::get('view_newbook', [AdminController::class, 'view_newbook'])->middleware(['auth', 'admin']);
route::get('view_orders', [AdminController::class, 'view_orders'])->middleware(['auth', 'admin']);
route::get('view_statistic', [AdminController::class, 'view_statistic'])->middleware(['auth', 'admin']);
route::get('view_users', [AdminController::class, 'view_users'])->middleware(['auth', 'admin']);
route::get('view_settings', [AdminController::class, 'view_settings'])->middleware(['auth', 'admin']);
