@props([
    'label'     => __('Remember me'),
    'id'        => Str::uuid(),
    'name'      => 'checkbox',
    'value'     => 'yes',
    'checked'   => false,
    'autofocus' => false,
])

<label
    {{ $attributes->class([
        'form-check-label',
    ])->merge([
        'for' => $id,
    ]) }}
>
    {{ $label }}
</label>

<input
    type="checkbox"
    @checked($checked)
    {{ $attributes->class([
        'form-check-input',
    ])->merge([
        'name'      => $name,
        'value'     => $value,
        'id'        => $id,
        'autofocus' => $autofocus,
    ]) }}
/>
