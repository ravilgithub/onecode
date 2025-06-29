@props([
    'label'    => 'Number',
    'name'     => 'number',
    'value'    => 0,
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
        {{ __($label) }}
    </label>
@endif

<input
    type="number"
    @required($required)
    {{ $attributes->class([
        "form-control"
    ])->merge([
        'name'  => $name,
        'value' => old($name) ?: $value,
    ])}}
/>
