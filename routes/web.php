<?php

use Illuminate\Support\Facades\Route;

// Landing Page
Route::get('/', function () {
    return view('welcome');
});

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Search Page
Route::get('/search', function () {
    return view('search');
})->name('search');

// Profile Page
Route::get('/profile', function () {
    return view('profile');
})->name('profile');

// Auth Pages
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Create Page (placeholder)
Route::get('/create', function () {
    return view('create');
})->name('create');

// Favorites Page (placeholder)
Route::get('/favorites', function () {
    return view('favorites');
})->name('favorites');
