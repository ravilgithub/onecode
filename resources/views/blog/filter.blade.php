<x-forms.form
    class="mb-3"
    action="{{ route('blog.index') }}"
    method="GET"
>
    <div class="row">
        <x-forms.form-item class="col-md-4">
            <x-forms.inputs.text
                name="search"
                value="{{ request('search') }}"
                placeholder="{{ __('Поиск') }}"
                autofocus
                single
                required
            />
        </x-forms.form-item>

        <x-forms.form-item class="col-md-4">
            <x-forms.inputs.select
                name="category_id"
                value="{{ request('category_id') }}"
                :options="$categories"
                single
                required
            />
        </x-forms.form-item>

        <x-forms.form-item class="col-md-4">
            <x-button class="w-100">
                {{ __('Применить') }}
            </x-button>
        </x-forms.form-item>
    </div>
</x-forms.form>
