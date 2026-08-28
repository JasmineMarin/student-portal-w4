<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $code }} - {{ $title }}</title>
</head>
<body>
    <h1>{{ $code }}</h1>
    <p>{{ $title }}</p>
    <a href="{{ route('courses.index') }}">← Back to Courses</a>
</body>
</html>