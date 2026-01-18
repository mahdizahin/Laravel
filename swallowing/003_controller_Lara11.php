<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

//all route here
// Route::get('/', [SiteController::class, 'home'])->name('home');
// Route::get('/about', [SiteController::class, 'about'])->name('about');
// Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
// Route::get('/investment', [SiteController::class, 'investment'])->name('investment');
// Route::get('/demo', [SiteController::class, 'demo'])->name('demo');

//By group 
Route::controller(SiteController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/investment', 'investment')->name('investment');
    Route::get('/demo', 'demo')->name('demo');
});
