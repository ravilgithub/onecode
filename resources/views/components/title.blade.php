@props([
    'level' => 1
])

<h{{ $level }} {{ $attributes->class([
    'h2',
    'my-4',
])}}>
    {{ $slot }}
</h{{ $level }}>
