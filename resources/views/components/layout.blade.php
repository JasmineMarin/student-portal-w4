<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Student Portal' }}</title>
</head>
<body>

    <!-- Shared Navigation -->
    <nav>
        <a href="{{ route('courses.index') }}">Home</a> | 
        <a href="{{ route('courses.index') }}">Courses</a>
    </nav>
    <hr>

    <!-- Page Content -->
    <main class="container">
        {{ $slot }}
    </main>

    <hr>
    <!-- Shared Footer -->
    <footer>
        <p>&copy; {{ date('Y') }} Student Portal</p>
    </footer>

</body>
</html>