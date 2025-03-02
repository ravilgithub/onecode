@props([
    'post' => null,
    'put'  => false,
    'categories' => [],
])

<x-forms.errors />

<x-forms.form {{ $attributes }} method="POST">
    @if ($put)
        @method('PUT')
    @endif

    <x-forms.form-item class="mb-3">
        <x-forms.inputs.text label="{{ __('Title') }}" value="{{ $post->title ?? '' }}" autofocus required />

        <x-forms.error name="title" />
    </x-forms.form-item>

    <x-forms.form-item class="mb-3">
        <x-forms.inputs.editor label="{{ __('Content') }}" value="{{ $post->content ?? '' }}" required />

        <x-forms.error name="content" />
    </x-forms.form-item>

    <x-forms.form-item class="col-md-4 mb-4">
        <x-forms.inputs.select
            label="Category"
            name="category_id"
            value="{{ request('category_id') }}"
            :options="$categories"
            required
        />

        <x-forms.error name="category_id" />
    </x-forms.form-item>

    <x-button>
        {{ $put ? __('Изменить пост') : __('Создать пост') }}
    </x-button>
</x-forms.form>
