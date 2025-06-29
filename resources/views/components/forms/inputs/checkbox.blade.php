{{--
    Что-бы сделать checkbox активным по умолчанию,
    нужно передать параметр "checked" при вызове компонента.
--}}
@props([
    'label'    => __('Remember me'),
    'id'       => Str::uuid(),
    'name'     => 'checkbox',
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
        class="form-check-label"
        for={{ $id }}
    >
        {{ $label }} | {{ is_array($input) ? collect(old($input['name'])) : old($name) }}
    </label>
@endif

<input
    type="checkbox"
    @checked(is_array($input) ? collect(old($input['name']))->contains($value) : old($name))
    @required($required)
    {{ $attributes->class([
        'form-check-input',
    ])->merge([
        'name'  => $name,
        'value' => is_array($input) ? $value : old($name),
        'id'    => $id,
    ])}}
/>
