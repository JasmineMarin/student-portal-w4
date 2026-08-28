<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = [
            ['code' => 'WEBDEV3', 'title' => 'Web Framework Laravel Development', 'units' => 5],
            ['code' => 'DBMS2', 'title' => 'Advanced Database Systems', 'units' => 3],
            ['code' => 'SE1', 'title' => 'Software Engineering 1', 'units' => 3],
        ];

        return view('courses', ['courses' => $courses]);
    }

    public function show(string $code)
    {
        $courses = [
            'WEBDEV3' => 'Web Framework Laravel Development',
            'WEBDEV2' => 'Server-Side Scripting',
        ];

        abort_unless(isset($courses[$code]), 404);

        return view('courses.show', [
            'code' => $code,
            'title' => $courses[$code],
        ]);
    }
}