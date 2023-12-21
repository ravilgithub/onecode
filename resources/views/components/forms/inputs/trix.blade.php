@props([
    'id'   => Str::uuid(),
    'name' => 'content',
    'value' => '',
])

<input
    type="hidden"
    id="{{ $id }}"
    name="{{ $name }}"
    value="{{ $value }}"
/>

<trix-editor
    input="{{ $id }}"
></trix-editor>

@pushOnce('css')
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
@endPushOnce

@pushOnce('js')
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
@endPushOnce
