@props([
    'disabled' => false,
    'variant' => 'primary',
    'size'    => '',
])

<button @disabled($disabled) {{ $attributes->class([
    'btn',
    'btn-' . $variant,
    'btn-' . $size => $size,
])->merge([
    'type' => 'submit',
]) }}>
    {{ $slot }}
</button>
