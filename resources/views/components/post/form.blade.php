@props([
    'post' => null,
    'put'  => false,
    'categories' => [],
])

<x-forms.form {{ $attributes }} method="POST">
    @if ($put)
        @method('PUT')
    @endif

    <x-forms.form-item class="mb-3">
        <x-forms.inputs.text label="Title" name="title" value="{{ $post->title ?? '' }}" autofocus required />

        <x-forms.error name="title" />
    </x-forms.form-item>

    <x-forms.form-item class="mb-3">
        <x-forms.inputs.editor label="Content" name="content" value="{{ $post->content ?? '' }}" required />

        <x-forms.error name="content" />
    </x-forms.form-item>

    <x-forms.form-item class="mb-4">
        <x-forms.inputs.select
            label="Category"
            name="category"
            value="{{ request('category') }}"
            :options="$categories"
            required
        />

        <x-forms.error name="category" />
    </x-forms.form-item>

    <x-forms.form-item class="mb-3">
        <x-forms.inputs.date label="Дата публикации" name="published_at" />
    </x-forms.form-item>

    <x-forms.form-item class="mb-3 form-check">
        <x-forms.inputs.checkbox label="Опубликовать" name="published" value="1" />
    </x-forms.form-item>

    <x-button>
        {{ $put ? __('Изменить пост') : __('Создать пост') }}
    </x-button>
</x-forms.form>
