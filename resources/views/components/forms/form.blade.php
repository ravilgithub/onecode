@props([
    'action' => '',
    'method' => 'GET',
])

<form
    action="{{ $action }}"
    method="{{ strtoupper($method) }}"
    autocomplete
>
    @if ($method !== 'GET')
        @csrf
    @endif

    {{ $slot }}
</form>
