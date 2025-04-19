<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.home');
})->name('home');

Route::get('/about', function () {
    return view('page.about');
})->name('about');

Route::get('/courses', function () {
    return view('page.courses');
})->name('courses');

Route::get('/contact', function () {
    return view('page.contact');
})->name('contact');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');




// Route::get('/upload', [CropImageController::class, 'index'])->name('upload');
// Route::post('/crop-image-upload', [CropImageController::class, 'store'])->name('crop.image.upload');
