@props([
    'label'    => __('Password'),
    'name'     => 'current_password',
    'required' => false,
    'single'   => false,
])

@if (! $single)
    <label
        @class([
            'form-label',
            'required' => $required,
        ])
    >
        {{ $label }}
    </label>
@endif

<input
    type="password"
    {{-- @required($required) --}}
    {{ $attributes->class([
        'form-control',
    ])->merge([
        'name' => $name,
    ])}}
/>
