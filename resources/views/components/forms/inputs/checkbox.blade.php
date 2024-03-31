@props([
    'label'     => __('Remember me'),
    'id'        => Str::uuid(),
    'name'      => 'checkbox',
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
    @checked(old($name))
    {{ $attributes->class([
        'form-check-input',
    ])->merge([
        'name'      => $name,
        'value'     => old($name),
        'id'        => $id,
        'autofocus' => $autofocus,
    ])}}
/>
