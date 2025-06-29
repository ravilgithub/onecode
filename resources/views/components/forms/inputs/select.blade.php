@props([
    'label'    => __('Select'),
    'name'     => 'select',
    'value'    => '',
    'required' => false,
    'single'   => false,
    'options'  => [],
])

@if (! $single)
    <label
        @class([
            'form-label',
            'required' => $required,
        ])
    >
        {{ $label }} {{ old($name) }}
    </label>
@endif

<select
    {{ $attributes->class([
        'form-select',
    ])->merge([
        'name'     => $name,
        'required' => $required,
    ])}}
>
    @foreach ($options as $key => $text)
        <option
            value="{{ $key }}"
            @selected($key == (old($name) ?: $value))
        >
            {{ $text }}
        </option>
    @endforeach
</select>
