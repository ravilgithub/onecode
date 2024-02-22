@props([
    'label'     => __('Title'),
    'name'      => 'title',
    'value'     => '',
    'required'  => false,
    'autofocus' => false,
])

<label
    @class([
        'form-label',
        'required' => $required,
    ])
>
    {{ $label }}
</label>

<input
    type="text"
    @required($required)
    {{ $attributes->class([
        'form-control',
    ])->merge([
        'name'      => $name,
        'value'     => $value,
        'autofocus' => $autofocus,
    ])}}
/>
