<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = [
            ['code' => 'WEBDEV3', 'title' => 'Web Framework Laravel Development'],
            ['code' => 'WEBDEV2', 'title' => 'Server-Side Scripting'],
        ];

        return view('courses.index', ['courses' => $courses]);
    }
}