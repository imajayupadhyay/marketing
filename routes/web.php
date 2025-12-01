<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home/Index');
})->name('home');

Route::get('/about', function () {
    return Inertia::render('About/Index');
})->name('about');

Route::get('/services', function () {
    return Inertia::render('Services/Index');
})->name('services');

Route::get('/services/brand-identity', function () {
    return Inertia::render('Services/BrandIdentity/Index');
})->name('services.brand-identity');

Route::get('/services/ui-ux-design', function () {
    return Inertia::render('Services/UIUXDesign/Index');
})->name('services.ui-ux-design');

Route::get('/services/social-media-management', function () {
    return Inertia::render('Services/SocialMedia/Index');
})->name('services.social-media');

Route::get('/services/lead-generation', function () {
    return Inertia::render('Services/LeadGeneration/Index');
})->name('services.lead-generation');

Route::get('/services/website-design', function () {
    return Inertia::render('Services/WebsiteDesign/Index');
})->name('services.website-design');

Route::get('/services/web-development', function () {
    return Inertia::render('Services/WebDevelopment/Index');
})->name('services.web-development');

Route::get('/contact', function () {
    return Inertia::render('Contact/Index');
})->name('contact');

Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');

// Admin Routes
Route::prefix('admin')->group(function () {
    // Guest routes (only accessible when not logged in)
    Route::middleware('guest')->group(function () {
        Route::get('/login', [App\Http\Controllers\Admin\AuthController::class, 'showLogin'])->name('admin.login');
        Route::post('/login', [App\Http\Controllers\Admin\AuthController::class, 'login']);
    });

    // Protected routes (only accessible when logged in)
    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', [App\Http\Controllers\Admin\AuthController::class, 'dashboard'])->name('admin.dashboard');
        Route::post('/logout', [App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('admin.logout');
    });
});
