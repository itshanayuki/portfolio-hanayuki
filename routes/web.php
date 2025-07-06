<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('proses.login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// Halaman Utama
Route::get('/', function () {
    return view('home');
})->name('home');

// Halaman About
Route::get('/about', function () {
    return view('about');
})->name('about');

// Halaman Portfolio
Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

// Halaman Contact (menampilkan form)
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Menangani Form Contact (POST)
Route::post('/contact', [ContactController::class, 'store'])->name('contact.submit');
