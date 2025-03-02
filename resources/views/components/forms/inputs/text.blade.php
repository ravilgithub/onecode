@props([
    'label'     => 'Text',
    'name'      => 'text',
    'value'     => '',
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
    type="text"
    @required($required)
    {{ $attributes->class([
        'form-control',
    ])->merge([
        'name'      => $name,
        'value'     => old($name) ?: $value,
        'autofocus' => $autofocus,
    ])}}
/>
