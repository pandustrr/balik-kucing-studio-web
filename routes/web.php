<?php

use App\Models\HeroSection;
use App\Models\MerchandiseCategory;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MerchandiseCategoryController;
use App\Http\Controllers\MerchandiseProductController;
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

Route::get('/merchandise', function () {
    $hero = \App\Models\HeroSection::where('page_name', 'merchandise')->first();
    $categories = \App\Models\MerchandiseCategory::oldest('name')->get();
    $products = \App\Models\MerchandiseProduct::with('category')->latest()->get();
    return view('merchandise.index', compact('hero', 'categories', 'products'));
})->name('merchandise');

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
        Route::put('/settings/whatsapp', [AdminController::class, 'updateWhatsapp'])->name('admin.settings.update-whatsapp');

        // Hero Manager Routes
        Route::get('/hero', [AdminController::class, 'heroIndex'])->name('admin.hero.index');
        Route::get('/hero/{id}/edit', [AdminController::class, 'heroEdit'])->name('admin.hero.edit');
        Route::put('/hero/{id}', [AdminController::class, 'heroUpdate'])->name('admin.hero.update');

        // Merchandise Management
        Route::get('/merchandise', [MerchandiseProductController::class, 'index'])->name('admin.merchandise.index');
        Route::resource('/merchandise/categories', MerchandiseCategoryController::class)->names([
            'index' => 'admin.merchandise.categories.index',
            'create' => 'admin.merchandise.categories.create',
            'store' => 'admin.merchandise.categories.store',
            'edit' => 'admin.merchandise.categories.edit',
            'update' => 'admin.merchandise.categories.update',
            'destroy' => 'admin.merchandise.categories.destroy',
        ]);
        Route::resource('/merchandise/products', MerchandiseProductController::class)->names([
            'index' => 'admin.merchandise.products.index',
            'create' => 'admin.merchandise.products.create',
            'store' => 'admin.merchandise.products.store',
            'edit' => 'admin.merchandise.products.edit',
            'update' => 'admin.merchandise.products.update',
            'destroy' => 'admin.merchandise.products.destroy',
        ]);

        Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');
    });
});
