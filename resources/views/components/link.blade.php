<a
    href="{{ $getRouteURL() }}"
    @class([
        $class,
        'active' => $is_active()
    ])
    @if ($is_area())
        aria-current="page"
    @endif
>
    {{ $slot }}
</a>
