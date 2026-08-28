@props(['code', 'title', 'units' => 3])

<article {{ $attributes->merge(['class' => 'card']) }}>
    <h2>
        <a href="{{ route('courses.index') }}">{{ $code }}</a>
    </h2>
    <p>{{ $title }}</p>
    <small>{{ $units }} units</small>

    @if (isset($slot) && $slot->isNotEmpty())
        <div class="card-body">{{ $slot }}</div>
    @endif
</article>