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

Route::get('/contact', function () {
    return Inertia::render('Contact/Index');
})->name('contact');
