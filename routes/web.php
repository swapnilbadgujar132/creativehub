<?php

use Illuminate\Support\Facades\Route;

// Landing Page
Route::get('/', function () {
    return view('welcome2');
});

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard2');
})->name('dashboard');

// Search Page
Route::get('/search', function () {
    return view('search2');
})->name('search');

// Profile Page
Route::get('/profile', function () {
    return view('profile2');
})->name('profile');

// Auth Pages
Route::get('/login', function () {
    return view('auth.login2');
})->name('login');

Route::get('/register', function () {
    return view('auth.register2');
})->name('register');

// Create Page (placeholder)
Route::get('/create', function () {
    return view('create2');
})->name('create');

// Favorites Page (placeholder)
Route::get('/favorites', function () {
    return view('favorites2');
})->name('favorites');
