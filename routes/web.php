<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ContactController;

// Static Pages
Route::get('/', fn () => view('home'));
Route::get('/about', fn () => view('about'));

// Dummy Login Route
Route::get('/login', fn () => 'Login Page')->name('login');

// Invokable Contact Route
Route::get('/contact', ContactController::class)->name('contact');

// Partial Resource Route (Only register index, show, and create)
Route::resource('courses', CourseController::class)->only(['index', 'show', 'create']);
Route::resource('courses', CourseController::class)->only(['index', 'show', 'create', 'store']);