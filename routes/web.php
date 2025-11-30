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

Route::get('/contact', function () {
    return Inertia::render('Contact/Index');
})->name('contact');
