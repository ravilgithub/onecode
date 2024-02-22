@props([
    'label'     => __('Password'),
    'name'      => 'password',
    'required'  => false,
    'autofocus' => false,
    'single'    => false,
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
    @required($required)
    {{ $attributes->class([
        'form-control',
    ])->merge([
        'name'      => $name,
        'autofocus' => $autofocus,
    ])}}
/>
