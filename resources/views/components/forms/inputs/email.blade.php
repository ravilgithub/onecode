@props([
    'label'     => __('Email'),
    'name'      => 'email',
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
    type="email"
    @required($required)
    {{ $attributes->class([
        'form-control',
    ])->merge([
        'name'      => $name,
        'autofocus' => $autofocus,
    ])}}
/>
