<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
})->name('home');

Route::get('/layanan', function () {
    return view('layanan.index');
})->name('layanan');

Route::get('/about', function () {
    return view('about.index');
})->name('about');

Route::get('/contact', function () {
    return view('contact.index');
})->name('contact');

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'authenticate'])->name('admin.authenticate');

    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/settings', [AdminController::class, 'settings'])->name('admin.settings');
        Route::put('/settings/name', [AdminController::class, 'updateName'])->name('admin.settings.update-name');
        Route::put('/settings/username', [AdminController::class, 'updateUsername'])->name('admin.settings.update-username');
        Route::put('/settings/password', [AdminController::class, 'updatePassword'])->name('admin.settings.update-password');
        Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');
    });
});
