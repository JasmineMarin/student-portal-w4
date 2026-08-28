<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Course</title>
</head>
<body>
    <h1>Create a New Course</h1>

    <!-- Placeholder Form for Week 8 -->
    <form action="#" method="POST">
        @csrf
        <div>
            <label for="code">Course Code:</label><br>
            <input type="text" id="code" name="code" placeholder="e.g. WEBDEV3" required>
        </div>
        <br>
        <div>
            <label for="title">Course Title:</label><br>
            <input type="text" id="title" name="title" placeholder="e.g. Web Framework Laravel Development" required>
        </div>
        <br>
        <button type="submit">Submit (Store)</button>
    </form>

    <br>
    <a href="{{ route('courses.index') }}">← Back to All Courses</a>
</body>
</html>