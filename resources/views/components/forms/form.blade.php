<form
    {{ $attributes }}
    action="{{ $action }}"
    method="{{ $method }}"
    autocomplete
>
    @if ($method !== 'GET')
        @csrf
    @endif

    {{ $slot }}
</form>
