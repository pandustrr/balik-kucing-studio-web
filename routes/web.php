<?php

use App\Models\HeroSection;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $hero = HeroSection::where('page_name', 'home')->first();
    return view('home.index', compact('hero'));
})->name('home');

Route::get('/layanan', function () {
    $hero = HeroSection::where('page_name', 'layanan')->first();
    return view('layanan.index', compact('hero'));
})->name('layanan');

Route::get('/about', function () {
    $hero = HeroSection::where('page_name', 'about')->first();
    return view('about.index', compact('hero'));
})->name('about');

Route::get('/contact', function () {
    $hero = HeroSection::where('page_name', 'contact')->first();
    return view('contact.index', compact('hero'));
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

        // Hero Manager Routes
        Route::get('/hero', [AdminController::class, 'heroIndex'])->name('admin.hero.index');
        Route::get('/hero/{id}/edit', [AdminController::class, 'heroEdit'])->name('admin.hero.edit');
        Route::put('/hero/{id}', [AdminController::class, 'heroUpdate'])->name('admin.hero.update');

        Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');
    });
});
