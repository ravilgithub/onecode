@props([
    'label'     => __('Remember me'),
    'id'        => Str::uuid(),
    'name'      => 'checkbox',
    'value'     => 'yes',
    'checked'   => false,
    'autofocus' => false,
    'single' => false,
])

@if (! $single)
    <label
        class="form-check-label"
        for={{ $id }}
    >
        {{ $label }}
    </label>
@endif

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
    ])}}
/>
