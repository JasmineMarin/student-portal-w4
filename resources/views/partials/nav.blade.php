<nav>
    <a href="/" @class(['active' => request()->is('/')])>Home</a>
    <a href="/about" @class(['active' => request()->is('about')])>About</a>
    <a href="{{ route('courses.index') }}" @class(['active' => request()->routeIs('courses.*')])>Courses</a>
    <a href="/contact" @class(['active' => request()->is('contact')])>Contact</a>
</nav>