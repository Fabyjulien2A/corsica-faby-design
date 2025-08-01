<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/services', [SiteController::class, 'services'])->name('services');
Route::get('/realisations', [SiteController::class, 'realisations'])->name('realisations');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
Route::post('/contact', [SiteController::class, 'sendContact'])->name('contact.send');
Route::get('/mentions-legales', function () {
    return view('mentions-legales');
})->name('mentions-legales');
Route::get('/confidentialite', function () {
    return view('confidentialite');
})->name('confidentialite');
Route::get('/cgv', function () {
    return view('cgv');
})->name('cgv');
