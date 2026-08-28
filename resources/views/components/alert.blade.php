@props(['type' => 'info', 'message' => null])

@php
    $cssClass = match ($type) {
        'success' => 'alert-success',
        'danger'  => 'alert-danger',
        default   => 'alert-info',
    };
@endphp

<div class="alert {{ $cssClass }}" role="alert">
    {{ $message ?? $slot }}
</div>