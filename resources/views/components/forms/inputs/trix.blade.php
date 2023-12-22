@props([
    'id'          => Str::uuid(),
    'name'        => 'content',
    'value'       => '',
    'placeholder' => '',
    'label'       => __( 'Content' ),
    'required'    => false,
    'autofocus'   => false,
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
    type="hidden"
    id="{{ $id }}"
    name="{{ $name }}"
    value="{{ $value }}"
/>

<trix-editor
    input="{{ $id }}"
    @required($required)
    {{ $attributes->merge([
        'autofocus'   => $autofocus,
        'placeholder' => $placeholder,
    ]) }}
></trix-editor>

@pushOnce('css')
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
@endPushOnce

@pushOnce('js')
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
@endPushOnce
