@props([
    'label'    => 'File',
    'name'     => 'file',
    'value'    => '',
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
    type="file"
    @required($required)
    {{ $attributes->class([
        'form-control',
    ])->merge([
        'name'  => $name,
        'value' => old($name) ?: $value,
    ])}}
/>
