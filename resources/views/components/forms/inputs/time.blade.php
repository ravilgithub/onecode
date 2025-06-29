@props([
    'label'    => __('Time'),
    'name'     => 'time',
    'value'    => '',
    'required' => false,
    'single'   => false,
])

@php
    $input = separate_input_name($name);
    if (is_array($input))
        echo 'array | ';
    else
        echo 'string | ';
@endphp

@if (! $single)
    <label
        @class([
            'form-label',
            'required' => $required,
        ])
    >
        {{ $label }} | {{ is_array($input) ? collect(old($input['name']))->get($input['param']) : (old($name) ?: $value) }}
    </label>
@endif

<input
    type="time"
    @required($required)
    {{ $attributes->class([
        'form-control',
    ])->merge([
        'name'  => $name,
        'value' => is_array($input) ? collect(old($input['name']))->get($input['param']) : (old($name) ?: $value),
    ])}}
/>