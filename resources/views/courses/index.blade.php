@extends('layouts.app')

@section('title', 'Courses – Student Portal')

@section('content')
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

    <!-- Course Cards -->
    @forelse ($courses as $course)
        <x-course-card 
            :code="$course['code']" 
            :title="$course['title']" 
            :units="$course['units'] ?? 3" 
        />
    @empty
        <p>No courses available.</p>
    @endforelse
@endsection

@push('scripts')
    <script src="/js/courses.js"></script>
@endpush