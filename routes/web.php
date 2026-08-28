<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

Route::get('/', fn () => view('home'));
Route::get('/about', fn () => view('about'));
Route::get('/courses', function () {
    $courses = [
        ['code' => 'WEBDEV3', 'title' => 'Web Framework Laravel Development', 'units' => 5],
        ['code' => 'DBMS2', 'title' => 'Advanced Database Systems', 'units' => 3],
        ['code' => 'SE1', 'title' => 'Software Engineering 1', 'units' => 3],
    ];
    return view('courses', ['courses' => $courses]);
});
Route::get('/contact', fn () => view('contact'));
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');