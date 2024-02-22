@props([
    'method' => 'GET',
])

<form
    {{ $attributes->merge([
        'action' => '',
        'method' => $method,
    ])}}
    autocomplete
>
    @if ($method !== 'GET')
        @csrf
    @endif

    {{ $slot }}
</form>
