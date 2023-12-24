@props([
    'post' => null,
    'put'  => false,
])

<x-forms.form {{ $attributes }} method="POST">
    @if($put)
        @method('PUT')
    @endif

    <x-forms.form-item>
        <x-forms.inputs.text label="{{ __('Title') }}" value="{{ $post->title ?? '' }}" autofocus required />
    </x-forms.form-item>

    <x-forms.form-item>
        <x-forms.inputs.trix label="{{ __('Content') }}" value="{{ $post->content ?? '' }}" required />
    </x-forms.form-item>

    <x-button>
        {{ __('Submit') }}
    </x-button>
</x-forms.form>
