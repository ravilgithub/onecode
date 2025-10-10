@props([
    'label'    => __('Date'),
    'name'     => 'date',
    'value'    => '',
    'required' => false,
    'single'   => false,
])

@php
    $input = separate_input_name($name);
@endphp

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
    type="date"
    @required($required)
    {{ $attributes->class([
        'form-control',
    ])->merge([
        'name'  => $name,
        'value' => is_array($input) ? collect(old($input['name']))->get($input['param']) : (old($name) ?: $value),
    ])}}
/>
