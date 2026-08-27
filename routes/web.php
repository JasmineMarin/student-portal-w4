<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

Route::get('/', fn () => view('home'));
Route::get('/about', fn () => view('about'));
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('/courses/{code}', [CourseController::class, 'show'])->name('courses.show');
Route::get('/contact', fn () => view('contact'));