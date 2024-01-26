<form
    action="{{ $action }}"
    method="{{ $method }}"
    autocomplete
>
    @csrf
    {{ $slot }}
</form>
