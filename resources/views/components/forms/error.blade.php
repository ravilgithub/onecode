@props([
    'name' => '',
])

@error($name)
    <small class="d-block mt-1 text-danger lh-sm">
        {{ $message }}
    </small>
@enderror
