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



// for test
Route::get('/student',    fn() =>    view('page.home'))->name('student');
Route::get('/student/admission',    fn() =>    view('page.home'))->name('student.admission');
Route::get('/student/result', fn() => view('page.home'))->name('student.result');
Route::get('/dashboard',    fn() =>    view('page.home'))->name('dashboard');
Route::get('/register',    fn()    =>    view('page.home'))->name('register');



// Route::get('/upload', [CropImageController::class, 'index'])->name('upload');
// Route::post('/crop-image-upload', [CropImageController::class, 'store'])->name('crop.image.upload');
