<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

route::get('/', [HomeController::class, 'home']);

Route::get('/', function () {
    return view('home.index');
});

Route::get('/dashboard', function () {
    // Get the previous URL
    $previousUrl = url()->previous();

    // Check if the user is coming from the login or register page
    $fromLogin = strpos($previousUrl, 'login') !== false;
    $fromRegister = strpos($previousUrl, 'register') !== false;

    // Pass data to the view
    return view('dashboard', [
        'pageTitle' => 'VALAMI',
        'fromLogin' => $fromLogin,
        'fromRegister' => $fromRegister,
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');


Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');    
});

require __DIR__.'/auth.php';

route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'admin']);