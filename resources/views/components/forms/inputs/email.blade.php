@props([
    'label'     => 'Email',
    'name'      => 'email',
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
        {{ __($label) }}
    </label>
@endif

<input
    type="email"
    @required($required)
    {{ $attributes->class([
        'form-control',
    ])->merge([
        'name'      => $name,
        'value'     => old($name),
        'autofocus' => $autofocus,
    ])}}
/>
