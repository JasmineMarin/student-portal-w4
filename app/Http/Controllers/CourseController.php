<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $allCourses = [
            ['code' => 'WEBDEV3', 'title' => 'Web Framework Laravel Development', 'units' => 5],
            ['code' => 'DBMS2', 'title' => 'Advanced Database Systems', 'units' => 3],
            ['code' => 'SE1', 'title' => 'Software Engineering 1', 'units' => 3],
        ];

        $search = $request->query('q', '');

        if ($search !== '') {
            $courses = array_filter($allCourses, function ($course) use ($search) {
                return stripos($course['title'], $search) !== false 
                    || stripos($course['code'], $search) !== false;
            });
        } else {
            $courses = $allCourses;
        }

        return view('courses.index', compact('courses', 'search'));
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        return 'store() — coming in Week 8';
    }

    public function show(string $code)
    {
        $courses = [
            'WEBDEV3' => 'Web Framework Laravel Development',
            'DBMS2'   => 'Advanced Database Systems',
            'SE1'     => 'Software Engineering 1',
        ];

        abort_unless(isset($courses[$code]), 404);

        return view('courses.show', [
            'code'  => $code,
            'title' => $courses[$code],
        ]);
    }

    public function edit(string $id)
    {
        return 'edit() — coming in Week 8';
    }

    public function update(Request $request, string $id)
    {
        return 'update() — coming in Week 8';
    }

    public function destroy(string $id)
    {
        return 'destroy() — coming in Week 8';
    }
}