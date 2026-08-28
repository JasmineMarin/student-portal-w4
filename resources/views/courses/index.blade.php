<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses List</title>
</head>
<body>
    <h1>Courses List</h1>

    <!-- Create Course Link -->
    <p>
        <a href="{{ route('courses.create') }}">+ Add New Course</a>
    </p>

    <!-- Search Form -->
    <form action="{{ route('courses.index') }}" method="GET">
        <input type="text" name="q" value="{{ $search }}" placeholder="Search courses...">
        <button type="submit">Search</button>
    </form>

    <br>

    <!-- Course List with Route Helpers -->
    <ul>
        @forelse ($courses as $course)
            <li>
                <a href="{{ route('courses.show', ['course' => $course['code']]) }}">
                    {{ $course['code'] }}
                </a> 
                — {{ $course['title'] }} ({{ $course['units'] }} units)
            </li>
        @empty
            <li>No courses found matching "{{ $search }}".</li>
        @endforelse
    </ul>
</body>
</html>