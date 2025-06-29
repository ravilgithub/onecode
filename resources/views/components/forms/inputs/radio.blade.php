@props([
    'id'       => Str::uuid(),
    'label'    => 'Radio',
    'name'     => 'radio',
    'value'    => '',
    'required' => false,
    'single'   => false,
])

@if (! $single)
    <label
        class="form-check-label"
        for={{ $id }}
    >
        {{ __($label) }}
    </label>
@endif

<input
    type="radio"
    @required($required)
    {{ $attributes->class([
        'form-check-input'
    ])->merge([
        'name'    => $name,
        'value'   => $value,
        'id'      => $id,
        'checked' => old($name) === $value
    ])}}
/>
