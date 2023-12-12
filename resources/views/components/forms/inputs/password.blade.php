@props([
    'label'     => __('Password'),
    'name'      => 'password',
    'required'  => false,
    'autofocus' => false,
])

<label
    {{ $attributes->class([
        'form-label',
        'required' => $required,
    ]) }}
>
    {{ $label }}
</label>

<input
    type="password"
    @required($required)
    {{ $attributes->class([
        'form-control',
    ])->merge([
        'name'      => $name,
        'autofocus' => $autofocus,
    ]) }}
/>
