<x-layout title="Courses – Student Portal">
    <h1>Courses List</h1>

    <p>
        <a href="{{ route('courses.create') }}">+ Add New Course</a>
    </p>

    <!-- Search Form -->
    <form action="{{ route('courses.index') }}" method="GET">
        <input type="text" name="q" value="{{ $search ?? '' }}" placeholder="Search courses...">
        <button type="submit">Search</button>
    </form>

    <br>

    @if (!empty($search))
        <p>Results for "<strong>{{ $search }}</strong>":</p>
    @endif

    <!-- Course List -->
    <ul>
    @forelse ($courses as $course)
        <li>
            <a href="{{ route('courses.show', $course['code']) }}">
                {{ $course['code'] }}
            </a> — {{ $course['title'] }}
        </li>
    @empty
        <li>No courses available.</li>
    @endforelse
    </ul>
</x-layout>